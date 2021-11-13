<x-layouts.app >
<x-card>
    <a class="btn inline-flex mb-2 justify-center items-center" href="{{"/categories/create"}}">
        <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-plus-square">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
        <span>{{__('Create')}}</span>
    </a>
    <div>
        {{--<livewire: item-data/>--}}

         @livewire('category-datatable')


        {{--<div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-6 place-content-start">--}}
            @foreach(categories($table) as $category)
                <x-card class="m-2 h-48 px-2 shadow-none" wire:key="{{$category->id}}">

                    <h4 class="truncate text-center">{{$category->name}}</h4>

                    <div class="flex items-center py-4 px-6 justify-between border-t-2 border-blue-700">


                        <a href="#" wire:click="editCategory({{ $category->id }})">


                        </a>
                        <span class="border-r-2 h-8"></span>

                        <a href="#" onclick="confirmDelete({{ $category->id }},'{{$category->name}}','deleteCategory')">
                        </a>


                    </div>

                </x-card>
            @endforeach
        {{--</div>--}}
    </div>
</x-card>
</x-layouts.app>

