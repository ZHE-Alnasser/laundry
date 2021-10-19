<div x-data="pos" class="bg-gray-50 sm:m-4">
    <div class="sm:flex">
        <div class="items mt-5  sm:mt-0">
            <div class="grid grid-cols-2 sm:grid-cols-3">
                <template x-for="item in items">
                    <div>
                        <label for="services-modal" @click="services=item.services;currentItem=item"
                               class="btn btn-primary w-32 m-1 modal-button" x-text="item.name"></label>
                    </div>
                </template>

                <input type="checkbox" id="services-modal" class="modal-toggle">
                <div class="modal">
                    <div class="modal-box">
                        <p x-text="currentItem.name"></p>
                        <div class="modal-action">
                            <label for="services-modal">
                                <template x-for="s in services">
                                <span class="m-2 btn btn-primary"
                                      @click="addServiceToOrder(s);services=null"
                                      x-text="s.name"></span>
                                </template>
                                <span class="btn btn-primary">{{__('close')}}</span>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="divide-blue-200 2xl:divider-vertical"></div>
        <div class="order">
            <template x-for="(o,index) in order" :key="index">
                <div
                    class="bg-white border-b-2 border-blue-200 border-none f sm:flex items-center justify-around justify-evenly m-2 p-4 rounded hover:bg-blue-100 text-black">
                    <div>
                        <div x-text="o.name"></div>
                        <div class="ms-2 text-gray-700"
                             x-text="'{{__('Unit Price')}}: ' + o.price + '{{currency()}}'"></div>
                    </div>
                    <div class="flex">
                    <div class="flex">
                        <button class="mx-1 mt-1 btn btn-primary"

                                type="button" @click="adjustBy(o,-1)">-</button>

                        <input id="service_id" type="hidden" x-bind:name="`services[${index}][id]`"  :value="o.id">
                        {{--@dd("o.id")--}}
                        <input type="number" min="1" class="input"
                               {{--name="quantity[]"--}}
                               x-bind:name="`services[${index}][quantity]`"
                               x-on:input="adjustQuantity(o, $event.target.value)"
                               x-on:change="adjustQuantity(o, $event.target.value)"
                               :value="o.quantity"/>
                        <button class="mx-1 mt-1 btn btn-primary" type="button" @click="adjustBy(o, 1)">+</button>
                    </div>

                    <div class="mx-1 mt-3" x-text="o.total"></div>
                    <input type="hidden" x-bind:name="`services[${index}][price]`"  :value="o.total">
                    <input type="hidden" x-bind:name="`services[${index}][total]`"  :value="o.total">

                    <div class="mt-3">
                        <a  @click="removeServiceFromOrder(o)">
                            <span class="h-8 w-8 text-red-600">X</span>
                        </a>
                    </div>

                    </div>
                </div>

            </template>
        </div>

    </div>

    <div class="flex items-end my-4">

        <input type="number" step="0.1" autocomplete="off" min="total" name="paid" class="input flex-1"
               x-model="paid" label="{{__('Paid Amount')}}"
               x-on:change="calculatePayments($event.target.value)"
               x-on:keydown.debounce.150ms="calculatePayments($event.target.value)"/>

        <button  type="button" class="h-full btn btn-primary" x-on:click="calculatePayments(total)">{{__('Full Amount')}}</button>
    </div>

    {{--Show total price--}}
    <div class="flex justify-between text-black">
        <div class="sm:flex">
            <input  name="sub_total" x-bind:value="total" hidden />
            <h4 class="mx-2 my-2" x-text="'{{__('Total')}}:' + total"></h4>
            <input  name="change" x-bind:value="total" hidden />
            <h4 class="mx-2 my-2" x-text="'{{__('Change')}}:' + change"></h4>

            <input x-init="vat={{setting('vat_rate')}}" hidden/>
            <input  name="vat" x-bind:value="total * vat/100" hidden />
            <h4 class="mx-2 my-2" x-text="'{{__('Total VAT')}}:' + total * vat/100"></h4>

            <input  name="total"  x-bind:value="total + total * vat/100" hidden />
            <h4 class="mx-2 my-2" x-text="'{{__('Total amount with VAT')}}:' + (total * vat/100 + total)"></h4>





        </div>

    </div>


</div>


<script>

    document.addEventListener('alpine:init', () => {
        Alpine.data('pos', () => ({
            index: 1,
            items: @json($items->load('services')),
            currentItem: null,
            totalWithVat:0,
            services: [

            ],
            total: 0,
            totalVat:0,
            paid: 0,
            change: 0,
            order: [
               @php
               $index =(count($order->services));
              if ($index > 0)
               if($order->services())
                 foreach($order->services as $service)
                               //dd($service);

            {
                    $id= $service->pivot->service_id;
                      // $id=$item->id;
                       foreach($services as $item)
                        if($item->id== $id)
                        $name=$item->name;
                        $price= $service->pivot->price;
                        $quantity= $service->pivot->quantity;
                        $total= $service->pivot->total;


    echo  "{id: '$id',price: '$price',quantity: '$quantity',total: $total,name: '$name'},";
    $index++;
          }
               @endphp


            ],


            addServiceToOrder(service) {
                service.index = ++(this.index);
                service.quantity = 1;
                service.total = service.price;
                this.order.push(service)
                this.calculatePayments()
            },

            removeServiceFromOrder(service) {
                let position = this.order.indexOf(service);
                this.order.splice(position, 1);
                console.log(position, service, this.order);
                this.calculatePayments()
                return true;

            },

            adjustBy(item, quantity = 1) {
                let newQuantity = item.quantity + (Number(quantity));
                this.adjustQuantity(item, newQuantity)
            },

            adjustQuantity(item, quantity = 1) {
                console.log(item, quantity);
                if (quantity < 1) return;
                item.quantity = Number(quantity);
                item.total = item.price * item.quantity;
                this.calculatePayments();
            },

            calculatePayments(paid = 0) {
                console.log(this.total, this.change, this.paid);
                this.total = this.order.reduce((n, {total}) => n + total, 0);
                if (paid) this.paid = paid;
                this.change = Math.round(((this.paid - this.total) + Number.EPSILON) * 100) / 100;
            },

        }))
    })


</script>
