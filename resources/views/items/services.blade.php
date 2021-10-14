
<div x-data="{ services: [


@php
        $index=0;
        if($item->services())
            foreach($services as $service)
            {

                        $name= $service->name;
                        $price= $service->price;


    echo  "{name: '$name',price: '$price'},";
    $index++;
          }

@endphp

{
name: '',
price: ''
},
   ] }">


    <template x-for="(service, index, services) in services" :key="index">
        <div class="grid grid-cols-6 gap-2 md:gap-6 mt-2">
            <div class="col-span-3 md:col-span-3 sm:col-span-2">
                <input required id="service_name" type="text" class="input mt-1 block w-full"

                       x-bind:name="`services[${index}][name]`"
                       {{--x-text="name"--}}
                              x-model="service.name"
                       placeholder="{{__('Service Name')}}"
                />
            </div>
            <div class="col-span-3 gab-1 md:col-span-2 sm:col-span-2">
                <input required id="service_price" type="text" class="input mt-1 block w-full"

                       x-bind:name="`services[${index}][price]`"
                       {{--x-text="price"--}}
                       x-model="service.price"
                       {{--value="{{$service->price}}"--}}
                       x-bind:value="price"
                       placeholder="{{__('Service Price')}}" />
            </div>
            <div class="col-span-1">
                <div class="flex justify-between h-5/6 items-end">

                    <template x-if="index > 0">
                        <button type="button" class=""
                                @click="services.splice(index, 1)">&times;</button>
                    </template>
                </div>
            </div>

        </div>
    </template>

    <button type="button" class="text-blue-800 hover:text-blue-400 underline" @click="services.push({
                  name: '',
                  price: ''
                  {{--item--}}
                  })">+{{__('Add')}}</button>
</div>