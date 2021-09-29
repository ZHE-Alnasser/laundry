<nav class="relative flex flex-wrap items-center justify-between  px-2  navbar-expand-lg ">


    <div class="w-full container mx-auto flex flex-grow items-center justify-between mt-0 ">
        {{--<button id="nav-toggle"--}}
                {{--class="md:hidden rounded-lg focus:outfoline-none focus:shadow-outline mr-3">--}}
            {{--<svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">--}}
                {{--<path x-show="!open" fill-rule="evenodd"--}}
                      {{--d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"--}}
                      {{--clip-rule="evenodd"></path>--}}
            {{--</svg>--}}
        {{--</button>--}}
        <div class="flex justify-between items-center lg:ml-0 ml-3">
            <a href="/home" class="font-bold text-xl text-indigo-600">
                {{--<img src="{{asset('img/logo.png')}}" alt="logo" class="w-20 m-1">--}}
            </a>
        </div>


        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto
        lg:mt-0 lg:bg-transparent text-black lg:p-0 lg:mr-0 mr-3"
             id="nav-content">
            <ul class="flex flex-col lg:flex-row list-none ">
                <div class="lg:visible invisible flex">

                    {{--<li class="nav-item">--}}
                        {{--<a class="links"--}}
                           {{--href="{{'/services' }}">--}}
                            {{--<span class="ml-2">{{ __('Services') }}</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}


                </div>
                <hr class="mb-2">

                               {{--@guest--}}
                {{--@if (Route::has('login'))--}}
                {{--<li class="nav-item">--}}
                {{--<a class="links"--}}
                {{--href="{{ route('login') }}">--}}
                {{--<span class="ml-2">{{ __('Login') }}</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endif--}}

                {{--@if (Route::has('register'))--}}
                {{--<li class="nav-item ">--}}
                {{--<a class="links"--}}
                {{--href="{{ route('register') }}">--}}
                {{--<span class="ml-2">{{ __('Register') }}</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--@else--}}


                {{--<li class="nav-item">--}}
                {{--<a class="links"--}}
                {{--href="/user/profile">--}}
                {{--<span class="ml-2">{{__('My Profile')}}</span>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item ">--}}
                {{--<a class="links"--}}
                {{--href="{{ route('logout') }}"--}}
                {{--onclick="event.preventDefault();--}}
                {{--document.getElementById('logout-form').submit();">--}}
                {{--<span class="ml-2">{{ __('Logout') }}</span>--}}
                {{--</a>--}}
                {{--</li>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--@endguest--}}

<div class="mx-auto">
                <li>
                    {{--<a href="/orders" ><i data-feather="shopping-cart" class="ml-1"></i></a>--}}
                    {{--<a href="/services/manage" ><i data-feather="package" class="ml-1"></i></a>--}}
                    {{--<a href="/dashboard" ><i data-feather="home" class="ml-1"></i></a>--}}

                    <button class="btn my-2" onClick="window.location.replace('/orders/create')">{{__('New Order')}}</button>
                </li></div>
            </ul>

        </div>

    </div>
</nav>

{{--<script>--}}
    {{--document.getElementById('nav-toggle').onclick = function () {--}}
        {{--document.getElementById("nav-content").classList.toggle("hidden");--}}
    {{--}--}}
{{--</script>--}}