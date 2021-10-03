<div class="h-4/6">
    <div class="bg-white border-b-2 border-blue-200 border-none f flex items-center justify-around justify-evenly m-2 px-4 py-2 rounded">
        <div>
            {{__('The Product')}}
        </div>
        <div>
            {{__('The Quantity')}}
        </div>
        <div></div>
        <div>
        </div>
    </div>
    <template x-for="product in filteredProducts()" :key="product.id">
        <div class="bg-white shadow hover:bg-blue-100 hover:shadow-lg hover:rounded transition duration-150 ease-in-out transform hover:scale-105 p-3 m-2"
             @click="addItem(product)">
            <img
                    class="w-10 h-10 rounded-full mr-4"
                    :src="product.img?`${product.img}`:`https://via.placeholder.com/150`"
            />
            <div x-text="product.name"></div>
        </div>
    </template>
    <template x-for="item in items" :key="item.id">
        <div class="bg-white border-b-2 border-blue-200 border-none f flex items-center justify-around justify-evenly m-2 p-4 rounded hover:bg-blue-100">
            <div>
                <div x-text="item.name"></div>
                <div class="ms-2 text-gray-400"
                     x-text="'{{__('Unit Price')}}: ' + item.price "></div>
            </div>
            <div class="flex">
                <button class="mx-1" type="button" @click="adjustBy(item,-1)">-</button>
                <x-input type="number" min="1"
                               x-ref="qtyValue"
                               x-on:input="adjustQuantity(item, $event.target.value)"
                               x-on:change="adjustQuantity(item, $event.target.value)"
                               x-bind:value="item.quantity"/>
                <button class="mx-1" type="button" @click="adjustBy(item, 1)">+</button>
            </div>
            <div x-text="item.total"></div>
            <div>
                <a @click="deleteItem(item)">Delete
                    {{--<x-heroicon-s-x class="h-8 w-8 text-red-600"/>--}}
                </a>
            </div>
        </div>
    </template>
</div>


@push('scripts')
    <script>
        let sourceCustomers = {!! $customers !!};
        // window.customersList = sourceCustomers.map(customer => ({...customer, ['value']: customer.id}));
        let sourceProducts = {!! $products !!};
        let sourceCategories =  {!! $categories !!};
                {{--let sourceOrders = {!! $orders !!};--}}


                {{--let sourceCustomers = {!! $customers !!};--}}
        let sourceFeatured = {!! $featured !!};

    </script>

    <script>
        document.addEventListener('alpine:initializing', () => {
            Alpine.data('pos', () => ({

                tab: 'productsTab',
                products: sourceProducts,
                sale: null,
                items: [],
                categories: sourceCategories,
                customers: sourceCustomers,
                selectedCustomer: null,
                searchCustomer: null,
                featured: sourceFeatured,
                selectedCategory: null,
                searchTerm: null,
                total_amount: 0,
                paid: 0,
                change: 0,

                employee: {{optional(auth())->id??'null'}},
                newCustomer: {
                    name: '',
                    email: '',
                    address_1: '',
                    address_2: '',
                    phone: ''
                },

                reset() {
                    this.sale = null;
                    this.items = [];
                    this.selectedCustomer = null;
                    this.selectedCustomer = null;
                    this.selectedCategory = null;
                    this.searchTerm = null;
                    this.total_amount = 0;
                    this.paid = 0;
                },

                setCustomer(customers) {
                    let customer = JSON.parse(customers)[0];

                    console.log('customer', customer);
                    if (customer.name == customer.value) {
                        $modals.show('add-new-customer');
                    }

                    console.log('NAME', customer.value);


                },

                filteredProducts()
                {
                    // return this.products;
                    // let  {category} = filters;

//                    if (this.searchTerm) {
//                        return this.products;
//                    }

//                    for (var product in this.products) {
//                        console.log(product.name);
//                    }
                    if (this.selectedCategory) {

                        return this.products.filter((product) => {
//                            console.log(product.category_id);
                            return product['category_id'] == this.selectedCategory.id;
//                            return product['category_id'].includes(this.selectedCategory.id);
                        });

//                            return this.products['category_id'].includes(this.selectedCategory.id);

                    }

                    return this.products;
                },

                addItem(product)
                {
                    let notExist = true;
                    console.log(product);
                    let {id,price,name} = product;
                    if (this.items.length) {
                        this.items.map(item => {
                            if (item.id == id) {
                                item.quantity = Number(item.quantity) + 1;
                                item.total = item.price * item.quantity;
                                notExist = false;
                            }
                            return item;
                        });
                    }

                    if (notExist) {
                        this.items.push({
                            id: id,
                            name: name,
                            quantity: 1,
                            price: price,
                            total: price
                        });
                    }
                    this.calculatePayments();
                },

                adjustBy(item, quantity = 1)
                {
                    let newQuantity = item.quantity + (Number(quantity));
                    this.adjustQuantity(item, newQuantity)

                },

                adjustQuantity(item, quantity = 1)
                {
                    if (quantity < 1) return;
                    item.quantity = Number(quantity);
                    item.total = item.price * item.quantity;
                    this.calculatePayments();
                },

                calculatePayments(calValue = 0)
                {
                    this.total_amount = this.items.reduce((n, {total}) => n + total, 0);
                    this.paid = calValue;

                    this.change = Math.round(((this.paid - this.total_amount) + Number.EPSILON) * 100) / 100;
                },

                close()
                {
                    let sale = {
                        total: this.total_amount,
                        paid: this.paid,
                        change: this.change,
                        customer: this.customer,
                        employee: this.employee,
                        created_at: Date.now(),
                        details: JSON.stringify(this.items),
                        status: true,
                    };
                    axios.post('/api/sales', sale)
                        .then(response => {

                            if (response.status == 200) {
                                window.dispatchEvent(
                                    new CustomEvent('swal:success', {detail: {text: '{{__('Successful Sales')}}'}})
                                );
                                this.showInvoice();
                                this.pushToOrders(sale)
                            }

                        })
                        .catch(error => console.log(error));

                },

                pushToOrders(sale) {
                    this.orders.push(sale);

                },

                showInvoice() {

// on click on close run                     this.reset();
                },
                deleteItem(item)
                {
                    let position = this.items.indexOf(item);
                    this.items.splice(position, 1);
                    this.calculatePayments();
                },









            }))
        })
    </script>

    <script>



        document.addEventListener('alpine:initializing', () => {

            Alpine.data('posw', () => ({


//
            }))
        })

    </script>
    @endpush

