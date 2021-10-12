
<div x-data="{ services: [
{
  name: '',
price: ''
},

@php
    $index=0;
    if($item->services())
        foreach($services as $service)
        {

                    $name= $service->name;
                    $price= $service->price;


echo  "{name: '$name',price: '$price',item_id:$item->id},";
$index++;
      }

@endphp
   {{--id: '',--}}
   {{--accountNumber: ''--}}
   ] }">

    <template x-for="(service, index, services) in services" :key="index">
        <div class="grid grid-cols-6 gap-6 mt-2">
            <div class="col-span-3 md:col-span-3 sm:col-span-2">

                <input id="service_name" type="text" class="input mt-1 block w-full"
                       x-bind:name="`services[${index}][name]`"
                       {{--x-text="name"--}}
                       placeholder="{{__('Service Name')}}" />
            </div>
            <div class="col-span-2 md:col-span-2 sm:col-span-2">
                <input id="service_price" type="text" class="input mt-1 block w-full"
                       x-bind:name="`services[${index}][price]`"
                       {{--x-text="price"--}}
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
    <button type="button" class="underline" @click="services.push({
                  name: '',
                  price: ''
                  {{--item--}}
                  })">+{{__('Add')}}</button>
</div>