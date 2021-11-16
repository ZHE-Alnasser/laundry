
<div x-data="{ services: [


@php
$index=count($item->services);

        if($index==0)
        echo "{
name: '',
price: ''
},";
        if($item->services())
            foreach($services as $service)
            {

                        $name= $service->name;
                        $price= $service->price;


    echo  "{name: '$name',price: '$price'},";
    $index++;
          }

@endphp


   ] }">


    <template x-for="(service, index, services) in services" :key="index">
        <div class="grid grid-cols-6 gap-2 md:gap-6 mt-2">
            <div class="col-span-3 md:col-span-3 sm:col-span-2">
                <input required id="service_name" type="text" class="input mt-1 block w-full"

                       x-bind:name="`services[${index}][name]`"

                              x-model="service.name"
                       placeholder="{{__('Service Name')}}"

                />
            </div>
            <div class="col-span-2 gab-1 md:col-span-2 sm:col-span-2">
                <input required id="service_price" type="text" class="input mt-1 block w-full"

                       x-bind:name="`services[${index}][price]`"

                       x-model="service.price"

                       x-bind:value="price"
                       placeholder="{{__('Price')}}" />
            </div>
            <div class="col-span-1">
                <div class="flex justify-between h-5/6 items-end">

                    {{--<template x-if="index > 0">--}}
                    <template x-if="index >= 0">
                        <button type="button" class="text-gray-800"
                                @click="services.splice(index, 1)"><span class="h-8 w-8 text-red-600">X</span></button>
                    </template>
                </div>
            </div>

        </div>
    </template>

    <button type="button" class="mt-3 text-blue-800 hover:text-blue-400 underline" @click="services.push({
                  name: '',
                  price: ''
                  {{--item--}}
                  })">+{{__('Add')}}</button>
</div>