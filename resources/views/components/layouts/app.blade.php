<x-layouts.base>
    <div class="flex flex-col sm:flex-row md:flex-row " {{$attributes??''}}>
        <div>
            <x-layouts._sidebar/>
        </div>

        <div class="flex-grow">
            <x-layouts._header/>
            <div class="p-2 sm:p-5">

                {{--{{ Breadcrumbs::render() }}--}}

                <x-feedback/>
                @yield('content')
                {{$slot??''}}

            </div>
        </div>
    </div>

    <x-layouts._footer/>
</x-layouts.base>


