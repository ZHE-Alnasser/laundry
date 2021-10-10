<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

<x-layouts.app>

        <div class="w-full  mx-auto flex flex-grow items-center justify-between mt-0 ">
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
                </a>
                <div class="lg:visible invisible flex">
                    <h2 class=" px-5 text-center text-3xl">{{__('Welcome')}}</h2>
                    <p class="mt-2">{{$name}}</p>

                </div>
            </div>



        </div>
        <div class="flex mt-5 mx-5">
          <div>  <button class="btn my-2 " onClick="window.location.replace('/orders/create')"><i data-feather="shopping-cart" class="ml-1"></i><span class="hidden sm:flex">{{__('New Order')}}</span></button></div>
            <div> <button class="btn my-2 mx-2" onClick="window.location.replace('/users/create')"><i data-feather="user-plus" class="ml-1"></i><span class="hidden sm:flex">{{__('Add User')}}</span></button></div>
            <div> <button class="btn my-2 " onClick="window.location.replace('/items/create')"><i data-feather="file-plus" class="ml-1"></i><span class="hidden sm:flex">{{__('Add Item')}}</span></button></div>

        </div>


        <div class="sm:flex mx-5 sm:mx-0 mt-5">
            {{--<script src="https://unpkg.com/feather-icons"></script>--}}
        <div class="mx-auto cart mb-3">
            <div class="card bg-card-1">
                <h2 class="mx-1  mb-2">{{__('Total Customers')}}</h2>
                <div class="flex mb-2 justify-center text-center">
                <span class="text-2xl mx-2" >{{$todayCustomers}}</span>
                    <i data-feather="users" class="mb-2 ml-1"></i>
                    {{--<img src="{{asset('img/svg/dollar.svg')}}">--}}
                </div>
                <div class="card-text"> <h3 >{{__('Today')}}</h3></div>
            </div></div>
         <div class="mx-auto cart mb-3">
             <div class="card bg-card-2">
                 <h2 class="mx-1  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2  text-center">
                 <span class="text-2xl">{{$today}}</span>
                     <i data-feather="dollar-sign" class=" mb-2 ml-1"></i>
                 </div>
                 <div class="card-text"><h3 >{{__('Today')}}</h3></div>

             </div>
         </div>
         <div class="mx-auto cart mb-3">
             <div class="card bg-card-3">
                 <h2 class="mx-1  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2  text-center">
                 <span class="text-2xl">{{$thisMonth}}</span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>
                 </div>
                     <div class="card-text"><h3>{{__('This Month')}}</h3></div>

             </div>
         </div>  <div class="cart mx-auto mb-3">
             <div class="card bg-card-4">

                 <h2 class="mx-1  mb-2">{{__('Total Orders')}}</h2>
                 <div class="mb-2  text-center">
                 <span class="text-2xl">{{$thisYear}}</span>
                     <i data-feather="dollar-sign" class="mb-2 ml-1"></i>

                 </div>
                     <div class="card-text"><h3>{{__('This Year')}}</h3></div>

             </div></div>
        </div>


            <div class="m-5 sm:flex-1">@include('dashboard.orders')</div>

 <div class="sm:flex">

     <div class=" sm:w-1/3 m-5 sm:flex-1">@include('dashboard.top-customers')</div>
    <div class="sm:w-1/3 m-5 sm:flex-1">@include('dashboard.top-items')</div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    </x-layouts.app>




