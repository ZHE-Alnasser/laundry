{{--<div class="md:flex flex-col md:flex-row md:min-h-screen w-full mb-4">--}}
    {{--<div class="flex flex-col w-full md:w-64 text-gray-700 bg-gray-100 dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0">--}}
        {{--<button class="flex-row text-gray-500 cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent--}}
        {{--rounded bg-transparent block md:hidden outline-none focus:outline-none mr-2"--}}
                {{--type="button" onclick="toggleNavbar('example-collapse-navbar')">--}}
            {{--<div class="flex flex1">--}}

                {{--<svg fill="currentColor" viewBox="0 0 20 20" class="flex-row w-6 h-6">--}}
                    {{--<path fill-rule="evenodd"--}}
                          {{--d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"--}}
                          {{--clip-rule="evenodd"></path>--}}
                {{--</svg>--}}
                {{--{{__("Manage")}}--}}

                {{--<nav class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto hidden flex-col"--}}
                     {{--id="example-collapse-navbar">--}}
                    {{--@canany(['Update-Items','Create-Items','Delete-Items','History-Items'])--}}
                        {{--<a class="sidebar-item text-green-300"--}}
                           {{--href="/items/manage">{{__("Items")}}</a>--}}
                    {{--@endcanany--}}
                    {{--@canany(['Update-Categories','Create-Categories','Delete-Categories','History-Categories'])--}}
                        {{--<a class="sidebar-item {{(Request::is('categories') || Request::is('categories/*')) ? 'primary-color-bg text-white' : ''}}"--}}
                           {{--href="/categories/manage">{{__("Categories")}}</a>--}}
                    {{--@endcanany--}}
                    {{--@canany(['Update-Universities','Create-Universities','Delete-Universities','History-Universities'])--}}
                        {{--<a class="sidebar-item {{(Request::is('universities') || Request::is('universities/*')) ? 'primary-color-bg text-white' : ''}}"--}}
                           {{--href="/universities/manage">{{__("Universities")}}</a>--}}
                    {{--@endcanany--}}
                {{--</nav>--}}
            {{--</div>--}}
        {{--</button>--}}
    {{--</div>--}}
 {{--</div>--}}
{{--<script>--}}
    {{--function toggleNavbar(collapseID) {--}}
        {{--document.getElementById(collapseID).classList.toggle("hidden");--}}
        {{--document.getElementById(collapseID).classList.toggle("flex");--}}
    {{--}--}}
{{--</script>--}}
{{--<x-layouts.base>--}}
    <script src="https://unpkg.com/feather-icons"></script>

    <div id="sidebar" class="">
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
{{--<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">--}}
    {{--<div class="flex flex-col w-full md:w-64 text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 flex-shrink-0">--}}
        {{--<nav class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">--}}

        <div class="bg-white pb-3  ">

                <button class="flex-row text-gray-500 cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent
        rounded bg-transparent block md:hidden outline-none focus:outline-none mr-2"
                        type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <div class="flex flex1">

                        <svg fill="currentColor" viewBox="0 0 20 20" class="flex-row w-6 h-6">
                            <path fill-rule="evenodd"
                                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                       <h1 class="px-2"> {{__("Manage")}}</h1>
                    </div>
                </button>
            <nav class="mt-2 mx-5 sm:mx-0 menu" id="example-collapse-navbar">
                <img src="{{asset('/img/favicon/android-icon-192x192.png')}}" alt="{{__('logo')}}" class="mx-auto w-32">
                <a class="side-items{{active('dashboard')}}"  href="/dashboard"><i data-feather="home" class="ml-1"></i><span class="side-text">{{__("Dashboard")}}</span></a>
                @canany(['Update-Orders','Create-Orders','Delete-Orders'])
                <a class="side-items{{active('orders')}}" href="/orders/manage"><i data-feather="shopping-cart" class="ml-1"></i><span class="side-text">{{__("Orders")}}</span></a>
@endcanany
                @canany(['Update-Users','Create-Users','Delete-Users'])
                <a class="side-items{{active('users')}}" href="/users/manage">

                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">--}}
                        {{--<path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />--}}
                    {{--</svg><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>--}}
                    <i data-feather="users" class="ml-1"></i> <span class="side-text">{{__('Users')}}</span></a>
                @endcanany
                {{--@canany(['Update-Roles','Create-Roles','Delete-Roles'])--}}
                    {{--<a class="side-items" {{(Request::is('roles') || Request::is('roles/*')) ? 'primary-color-bg text-white' : ''}} href="/roles"><i data-feather="key" class="ml-1"></i><span class="side-text">{{__("Roles")}}</span></a>--}}
                {{--@endcanany--}}
                @canany(['Update-Items','Create-Items','Delete-Items'])
                 <a class="side-items{{active('items')}}" {{(Request::is('item') || request()->is('items/*')) ? 'primary-color-bg text-white' : ''}} href="/items/manage"><i data-feather="shopping-bag" class="ml-1"></i><span class="side-text">{{__("Items")}}</span></a>
                @endcanany
                @canany(['Update-Services','Create-Services','Delete-Services'])
                    <a class="side-items{{active('services')}}" href="/services/manage">
                    <i data-feather="package" class="ml-1"></i>
                    {{--<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                        {{--<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />--}}
                    {{--</svg>--}}
                    <span class="side-text">{{__("Services")}}</span></a>
                @endcanany
                {{--@canany(['Update-Cities','Create-Cities','Delete-Cities'])--}}
                {{--<a class="side-items" href="/cities/manage"><i data-feather="map" class="ml-1"></i><span class="side-text">{{__("Cities")}}</span></a>--}}
                {{--@endcanany--}}
                @canany(['Update-Districts','Create-Districts','Delete-Districts'])
                    <a class="side-items{{active('districts')}}" href="/districts/manage"><i data-feather="map-pin" class="ml-1"></i><span class="side-text">{{__("Delivery Map")}}</span></a>
                @endcanany
                    {{--<a class="side-items" href="/types/manage"><i data-feather="type" class="ml-1"></i><span class="side-text">{{__("Types")}}</span></a>--}}


                {{--<a class="side-items" href="/timeframes/manage"><i data-feather="clock" class="ml-1"></i><span class="side-text">{{__("Time Frame")}}</span></a>--}}
                @canany(['Update-Settings','Create-Settings','Delete-Settings'])
                <a class="side-items{{active('settings')}}" href="/settings"><i data-feather="settings" class="ml-1"></i><span class="side-text">{{__("Settings")}}</span></a>
               @endcanany
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="links"
                               href="{{ route('login') }}">
                                <span class="ml-2">{{ __('Login') }}</span>
                            </a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item ">
                            <a class="links"
                               href="{{ route('register') }}">
                                <span class="ml-2">{{ __('Register') }}</span>
                            </a>
                        </li>
                    @endif
                @else


                    {{--<li class="nav-item">--}}
                    {{--<a class="links"--}}
                    {{--href="/user/profile">--}}
                    {{--<span class="ml-2">{{__('My Profile')}}</span>--}}
                    {{--</a>--}}
                    {{--</li>--}}

                        <a class="side-items"
                           href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            <i data-feather="log-out" class="ml-1"></i>
                            <span class="side-text">{{ __('Logout') }}</span>
                        </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest


            </nav>

        </div>
    </div>
</div>
    <script>
        feather.replace()
    </script>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("flex");
    }
</script>
{{--</x-layouts.base>--}}