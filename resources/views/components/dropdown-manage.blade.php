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
            {{ $slot }}

        </div>

    </div>

</div>