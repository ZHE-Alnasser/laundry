<nav   id="nav-content" class="mt-2  sm:mx-0 menu" id="example-collapse-navbar">
    <img src="{{asset('/img/favicon/android-icon-192x192.png')}}" alt="{{__('logo')}}" class=" mx-auto w-32">
    <a class="side-items{{active('dashboard')}}"  href="/dashboard"><i data-feather="home" class="ml-1"></i><span class="side-text">{{__("Dashboard")}}</span></a>
    @canany(['Update-Orders','Create-Orders','Delete-Orders'])
        <a class="side-items{{active('orders')}}" href="/orders/manage"><i data-feather="shopping-cart" class="ml-1"></i><span class="side-text">{{__("Orders")}}</span></a>
    @endcanany
    @canany(['Update-Users','Create-Users','Delete-Users'])
        <a class="side-items{{active('users')}}" href="/users/manage">


            <i data-feather="users" class="ml-1"></i> <span class="side-text">{{__('Users')}}</span></a>
    @endcanany

    @canany(['Update-Items','Create-Items','Delete-Items'])
        <a class="side-items{{active('items')}}" {{(Request::is('item') || request()->is('items/*')) ? 'primary-color-bg text-white' : ''}} href="/items/manage"><i data-feather="shopping-bag" class="ml-1"></i><span class="side-text">{{__("Items")}}</span></a>
    @endcanany
    @canany(['Update-Services','Create-Services','Delete-Services'])
        <a class="side-items{{active('services')}}" href="/services/manage">
            <i data-feather="package" class="ml-1"></i>

            <span class="side-text">{{__("Services")}}</span></a>
    @endcanany
    @canany(['Update-Branches','Create-Branches','Delete-Branches'])
        <a class="side-items{{active('branches')}}" href="/branches/manage">
            <i data-feather="git-branch" class="ml-1"></i>

            <span class="side-text">{{__("Branches")}}</span></a>
    @endcanany


    @canany(['Update-Districts','Create-Districts','Delete-Districts'])
        <a class="side-items{{active('districts')}}" href="/districts/manage"><i data-feather="map-pin" class="ml-1"></i><span class="side-text">{{__("Delivery Map")}}</span></a>
    @endcanany
    @canany(['Update-Expenses','Create-Expenses','Delete-Expenses'])
        <a class="side-items{{active('expenses')}}" href="/expenses/manage">
            <i data-feather="dollar-sign" class="ml-1"></i>

            <span class="side-text">{{__("Expenses")}}</span></a>
    @endcanany
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