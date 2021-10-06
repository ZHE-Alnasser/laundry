


<x-layouts.app>
    <x-card>
    <div class="flex justify-between mb-5 flex-row mt-5">
    <a class="btn inline-flex mb-2 justify-center items-center" href="{{"/users/create"}}">
        <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
             class="feather feather-plus-square">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="12" y1="8" x2="12" y2="16"></line>
            <line x1="8" y1="12" x2="16" y2="12"></line>
        </svg>
        <span>{{__('Create')}}</span>
    </a>
    {{--<a class="btn inline-flex mb-2 justify-center items-center" href="{{"/roles"}}">--}}
        {{--<i data-feather="key" class="ml-1"></i>--}}
        {{--<span>{{__('Manage Roles')}}</span>--}}
    {{--</a>--}}
        <div class="mx-1">
            <div x-data="{show: false}" @click.away="show = false" x-cloak >

                <a class="btn" @click="show = ! show" class="ml-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>{{__('Manage')}}<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-5 pt-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg></a>

                <div class="absolute border-2 bg-white py-0 z-40 rounded mt-1"
                     x-show="show"
                     x-transition:enter="transition duration-200 transform ease-out"
                     x-transition:enter-start="scale-75"
                     x-transition:leave="transition duration-100  transform ease-in"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end ="opacity-0 scale-90">
                    <div class="mx-2 mt-1 border-b">
                        <a class="text-sm z-40" href="{{'/roles'}}">{{__('Manage Roles')}}</a>
                    </div>
                    <div class="mx-1 mb-2 mt-2">
                        <a class="text-sm z-40" href="{{'/categories'}}">{{__('Manage Categories')}}</a>
                    </div>

                </div>

            </div>

        </div>
    </div>
<div>
    @livewire('users-datatable')
</div>
    </x-card>
</x-layouts.app>
