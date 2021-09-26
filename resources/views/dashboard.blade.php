
    <x-layouts.admin>
        <div class="mt-5 ">
            {{--<x-index-card>--}}
                {{--<h1 class=" mx-10 text-center text-3xl">{{__('Welcome')}}</h1>--}}
                {{--<h2 class=" mt-10 text-center text-2xl ">{{$firstName}} {{$lastName}}</h2>--}}
            <div class="md:grid grid-cols-4 grid-flow-row gap-2">
                <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400">
                    <a href="{{url('users')}}">
                        <img src="{{asset('img/svg/users.svg')}}"/>
                    <span class="text-center text-4xl text-color">{{__('Users')}}</span>
                    </a>
                    </div>


        <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('orders')}}">

                <img src="{{asset('img/svg/order.svg')}}"/>

                    <h2 class="text-center text-4xl text-color">@lang('Orders')</h2>

             </a></div>
    <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('items')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/item.svg')}}"/>
                <h2 class="text-center text-4xl text-color">@lang('Items')</h2>

            </div></a></div>
    <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('services/manage')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/service.svg')}}"/>
                <h2 class="text-center text-4xl text-color">@lang('Services')</h2>

            </div></a></div>
    <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('cities')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/city.svg')}}"/>
                <h2 class="text-center text-4xl text-color">@lang('Cities')</h2>

            </div></a></div>

    <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('districts')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/map.svg')}}"/>
                <h2 class="text-center text-4xl text-color">@lang('Districts')</h2>

            </div></a></div>

                <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('roles')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/role.svg')}}"/>

                <h2 class="text-center text-4xl  text-color">@lang('Roles')</h2>

            </div></a></div>

                <div class=" bg-teal-400 card rounded-2xl border-2 border-gray-400 ">  <a href="{{url('settings')}}">
            <div class="info-box bg-green">
                <img src="{{asset('img/svg/settings.svg')}}"/>
                <h2 class="text-center text-4xl text-color">@lang('Settings')</h2>

            </div></a></div>
</div>
    {{--<div class="grid cols-4">--}}
                    {{--@if(auth()->user()->role->name == 'admin')--}}
                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<a href="{{url('users')}}">--}}
                                {{--<div class="info-box bg-green">--}}
                                    {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                    {{--<div class="info-box-content text-center center-block"><br>--}}
                                        {{--<span class="info-box-text">{{__('Manage Users')}}</span>--}}
                                    {{--</div>--}}
                                {{--</div></a>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<a href="{{url('groups')}}">--}}
                                {{--<div class="info-box bg-green">--}}
                                    {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                    {{--<div class="info-box-content text-center center-block"><br>--}}
                                        {{--<span class="info-box-text">@lang('site.groups')</span>--}}
                                    {{--</div>--}}
                                {{--</div></a>--}}
                        {{--</div>--}}



                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<a href="{{url('services')}}">--}}
                                {{--<div class="info-box bg-green">--}}
                                    {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                    {{--<div class="info-box-content text-center center-block"><br>--}}
                                        {{--<span class="info-box-text">@lang('Mange Services')</span>--}}
                                    {{--</div>--}}
                                {{--</div></a>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<a href="{{url('cities')}}">--}}
                                {{--<div class="info-box bg-green">--}}
                                    {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                    {{--<div class="info-box-content text-center center-block"><br>--}}
                                        {{--<span class="info-box-text">@lang('Manage Cities')</span>--}}
                                    {{--</div>--}}
                                {{--</div></a>--}}
                        {{--</div>--}}

                        {{--<div class="col-sm-6 col-xs-12">--}}
                            {{--<a href="{{url('districts')}}">--}}
                                {{--<div class="info-box bg-green">--}}
                                    {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                    {{--<div class="info-box-content text-center center-block"><br>--}}
                                        {{--<span class="info-box-text">@lang('Manage Districts')</span>--}}
                                    {{--</div>--}}
                                {{--</div></a>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                    {{--<div class="col-sm-6 col-xs-12">--}}
                        {{--<a href="{{url('orders')}}">--}}
                            {{--<div class="info-box bg-green">--}}
                                {{--<span class="info-box-icon"><i class="glyphicon glyphicon-th"></i></span>--}}
                                {{--<div class="info-box-content text-center center-block"><br>--}}
                                    {{--<span class="info-box-text">@lang('Manage Orders')</span>--}}
                                {{--</div>--}}
                            {{--</div></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</x-index-card>--}}
        </div>
    </x-layouts.admin>




