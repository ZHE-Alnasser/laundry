<x-layouts.admin>

    <div class="flex justify-between mb-5 flex-row mt-5">
        @can("Create-$model")
            <a class="btn inline-flex justify-center items-center" href="{{url("$action")}}">
                <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-plus-square">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="8" y1="12" x2="16" y2="12"></line>
                </svg>
                <span>{{__('Create')}}</span>
            </a>
        @endcan
        {{--@if (!Request::is('roles/*'))--}}
            @can("History-$model")
                <a class="btn inline-flex justify-center items-center"
                   href="/activities/{{$modelName??''}}">
                    <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-rotate-cw">
                        <polyline points="23 4 23 10 17 10"></polyline>
                        <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path>
                    </svg>

                    <span>{{__('History')}}</span>
                </a>
            @endcan
        {{--@endif--}}
    </div>
    {{ $slot??'' }}

</x-layouts.admin>
