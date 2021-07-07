<div wire:key="{{$item->id}}" class="flex flex-col overflow-hidden rounded-lg shadow-lg">
    <a href="{{$item->path('edit')}}">
        <div class="flex flex-col justify-between">
            <div class="flex flex-col justify-between flex-1 p-4 bg-white">
                <div>
                    <h3 class="block text-xl font-semibold leading-7 text-gray-900 text-center">{{$item->name}}</h3>

                    <div class="mt-3 text-base leading-6 text-gray-500">
                        {{--<p class=" mt-2 text-base leading-6 text-gray-500"><b>{{__('SKU')}}: </b>{{$item->sku}}</p>--}}
                        <p class=" mt-2 text-base leading-6 text-gray-500"><b>{{__('Price')}}
                                : </b>{{$item->amount.currency()}} </p>
                        {{--<p class=" mt-2 text-base leading-6 text-gray-500"><b>{{__('Expiry Date')}}--}}
                        {{--: </b> {{$item->expiry_date}}</p>--}}
                    </div>
                </div>
                <p class=" mt-2 text-base leading-6 text-gray-500"><b>{{__('Category')}}
                        : </b> {{optional($item->category)->name}}</p>
                {{--@if($item->tags)--}}
                    {{--<p class="mt-3 text-sm font-medium leading-5">--}}
                        {{--@foreach($item->tags as $tag)--}}
                            {{--<span--}}
                                    {{--class="inline-flex m-1 items-center px-3 py-1 text-xs font-medium leading-tight text-blue-800 bg-blue-100 rounded-full">{{$tag->name}}</span>--}}
                        {{--@endforeach--}}
                    {{--</p>--}}
                {{--@endif--}}
            </div>

            <div class="flex items-center py-4 px-6 justify-between bg-gray-100">

                <a href="{{$item->path('edit')}}">
                <span>
                    <x-far-edit class="text-blue-800 h-6"/>
                </span>
                </a>
                <span class="border-r-2 h-8"></span>
                <a onclick="deleteModal({{$item->id}},'{{$item->name}}')">
                    <x-heroicon-o-trash class="text-red-600 h-6"/>
                </a>
            </div>
        </div>
    </a>
</div>
{{--<x-slot name="filters">--}}
{{--</x-slot>--}}
{{--SKU--}}
{{--Item Name--}}
{{--Category--}}
{{--Sale Price--}}
{{--Tax--}}
{{--Tax type--}}
{{--Remaining--}}
{{--Item Type--}}
{{--State--}}
{{--Created--}}

