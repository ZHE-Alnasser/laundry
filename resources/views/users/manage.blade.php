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

<div>
        <a class="btn text-sm z-40" href="{{'/roles'}}">{{__('Manage Roles')}}</a>
        <a class="btn text-sm z-40" href="{{'/categories/users'}}">{{__('Manage Categories')}}</a>
</div>

    </div>
<div>
    @livewire('users-datatable')

</div>

    </x-card>
</x-layouts.app>
