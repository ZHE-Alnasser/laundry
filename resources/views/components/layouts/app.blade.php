

<x-layouts.base>
    <div class="flex flex-col sm:flex-row md:flex-row " >
        <div>
            <x-layouts._sidebar/>
        </div>

        <div class="flex-grow">
            <x-layouts._header/>
            <div class="p-2 sm:p-5">
                {{--                {{ isset($breadcrumbs)??Breadcrumbs::render($breadcrumbs) }}--}}
                {{--                {{ Breadcrumbs::render() }}--}}

                {{--                <x-card>--}}
                <x-feedback/>
                @yield('content')
                {{$slot??''}}
                {{--                </x-card>--}}
            </div>
        </div>
    </div>

    <x-layouts._footer/>
</x-layouts.base>
{{--@endsection--}}







