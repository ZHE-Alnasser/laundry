
    <x-layouts.admin>

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
                <div class="lg:visible invisible flex">
                    <h2 class=" mx-10 text-center text-3xl">{{__('Welcome')}}</h2>
                    <p>{{$name}}</p>

                </div>
            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto
        lg:mt-0 lg:bg-transparent text-black lg:p-0 lg:mr-0 mr-3"
                 id="nav-content">

                <ul class="flex flex-col lg:flex-row list-none ">

                    <hr class="mb-2">

                    <div class="mx-auto">
                        <li>
                            @canany(['Update-Orders','Create-Orders','Delete-Orders'])
                            <a href="/orders" ><i data-feather="shopping-cart" class="ml-1"></i></a>
                            @endcan
                                @canany(['Update-Services','Create-Services','Delete-Services'])
                            <a href="/services/manage" ><i data-feather="package" class="ml-1"></i></a>
                                @endcan
                                {{--@canany(['Update-Orders','Create-Orders','Delete-Orders'])--}}
                            <a href="/dashboard" ><i data-feather="home" class="ml-1"></i></a>
                                    {{--@endcan--}}

                        </li></div>
                </ul>

            </div>

        </div>


        {{--<div class="mt-5 ">--}}
            {{--<x-indediv>--}}
                {{--<h1 class=" mx-10 text-center text-3xl">{{__('Welcome')}}</h1>--}}
                {{--<h2 class=" mt-10 text-center text-2xl ">{{$firstName}} {{$lastName}}</h2>--}}
            {{--<div class="md:grid grid-cols-4 grid-flow-row gap-2">--}}
                {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400">--}}
                    {{--<a href="{{url('users')}}">--}}
                        {{--<img src="{{asset('img/svg/users.svg')}}"/>--}}
                    {{--<span class="text-center text-4xl text-color">{{__('Users')}}</span>--}}
                    {{--</a>--}}
                    {{--</div>--}}


        {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('orders')}}">--}}

                {{--<img src="{{asset('img/svg/order.svg')}}"/>--}}

                    {{--<h2 class="text-center text-4xl text-color">@lang('Orders')</h2>--}}

             {{--</a></div>--}}
    {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('items')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/item.svg')}}"/>--}}
                {{--<h2 class="text-center text-4xl text-color">@lang('Items')</h2>--}}

            {{--</div></a></div>--}}
    {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('services/manage')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/service.svg')}}"/>--}}
                {{--<h2 class="text-center text-4xl text-color">@lang('Services')</h2>--}}

            {{--</div></a></div>--}}
    {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('cities')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/city.svg')}}"/>--}}
                {{--<h2 class="text-center text-4xl text-color">@lang('Cities')</h2>--}}

            {{--</div></a></div>--}}

    {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('districts')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/map.svg')}}"/>--}}
                {{--<h2 class="text-center text-4xl text-color">@lang('Districts')</h2>--}}

            {{--</div></a></div>--}}

                {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('roles')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/role.svg')}}"/>--}}

                {{--<h2 class="text-center text-4xl  text-color">@lang('Roles')</h2>--}}

            {{--</div></a></div>--}}

                {{--<div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('settings')}}">--}}
            {{--<div class="info-box bg-green">--}}
                {{--<img src="{{asset('img/svg/settings.svg')}}"/>--}}
                {{--<h2 class="text-center text-4xl text-color">@lang('Settings')</h2>--}}

            {{--</div></a></div>--}}
{{--</div>--}}
   {{----}}

        </div>

        <div class="sm:flex mx-5 mt-5">

        <div class="mx-auto">
            <div class="card bg-card-1">
                <h2 class="mx-5  mb-2">{{__('Total Customers')}}</h2>
                <div class="mb-2 mx-10 text-center">
                <span class="text-2xl" >{{$todayCustomers}}</span>
                    <i data-feather="users" class="mb-2 ml-1"></i>
                </div>
                <div class="card-text"> <h3 >{{__('Today')}}</h3></div>
            </div></div>
         <div class="mx-auto">
             <div class="card bg-card-2">
                 <h2 class="mx-5  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2 mx-10 text-center">
                 <span class="text-2xl">{{$today}}</span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>
                 </div>
                 <div class="card-text"><h3 >{{__('Today')}}</h3></div>

             </div>
         </div>
         <div class="mx-auto">
             <div class="card bg-card-3">
                 <h2 class="mx-5  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2 mx-10 text-center">
                 <span class="text-2xl">{{$thisMonth}}</span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>
                 </div>
                     <div class="card-text"><h3>{{__('This Month')}}</h3></div>

             </div>
         </div>  <div class="mx-auto">
             <div class="card bg-card-4">

                 <h2 class="mx-5  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2 mx-10 text-center">
                 <span class="text-2xl">{{$thisYear}}</span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>

                 </div>
                     <div class="card-text"><h3>{{__('This Year')}}</h3></div>

             </div></div>
        </div>


        <div class="sm:flex">
            <div class=" sm:w-1/3 m-5 sm:flex-1">@include('dashboard.orders')</div>
            <div class="sm:w-1/3 m-5 sm:flex-1">@include('dashboard.top-items')</div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </x-layouts.admin>




