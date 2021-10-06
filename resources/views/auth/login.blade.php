{{--<x-layouts.base>--}}
{{--<x-guest-layout>--}}
    {{--<x-jet-authentication-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<x-jet-authentication-card-logo />--}}
          {{--<img  src="{{setting('logo','logo')}}">--}}
        {{--</x-slot>--}}

        {{--<x-jet-validation-errors class="mb-4" />--}}

        {{--@if (session('status'))--}}
            {{--<div class="mb-4 font-medium text-sm text-green-600">--}}
                {{--{{ session('status') }}--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--<form method="POST" action="{{ route('login') }}">--}}
            {{--@csrf--}}
            {{--<div class="pt-3">--}}
            {{--<div>--}}
                {{--<x-jet-label for="email" value="{{ __('Email') }}" />--}}
                {{--<x-input id="email" class="block mt-1 w-full input" type="email" name="email" :value="old('email')" required autofocus />--}}
            {{--</div>--}}

            {{--<div class="mt-4">--}}
                {{--<x-jet-label for="password" value="{{ __('Password') }}" />--}}
                {{--<x-input id="password" class="block  mt-1 w-full input" type="password" name="password" required autocomplete="current-password" />--}}
            {{--</div>--}}

            {{--<div class="block  mt-4">--}}
                {{--<label for="remember_me" class=" items-center">--}}
                    {{--<x-jet-checkbox id="remember_me" name="remember" />--}}
                    {{--<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                {{--</label>--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--@if (Route::has('password.request'))--}}
                    {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
                        {{--{{ __('Forgot your password?') }}--}}
                    {{--</a>--}}
                {{--@endif--}}

                {{--<button class="btn rounded-lg ml-4">--}}
                    {{--{{ __('Log in') }}--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</x-jet-authentication-card>--}}
{{--</x-guest-layout>--}}
{{--</x-layouts.base>--}}

<x-layouts.base>

    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            <img src="https://images.unsplash.com/photo-1444313431167-e7921088a9d3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1441&q=100"
            {{--<img src="https://www.freepik.com/premium-photo/front-view-pile-laundry_6436890.htm"--}}
                 alt="" class="w-full h-full object-cover">
        </div>

        <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

            <div class="w-full  h-100">

                <img src="{{asset('/img/favicon/apple-icon-180x180.png')}}" alt="{{__('logo')}}" class="mx-auto mt-8 w-32">

                <h1 class="text-2xl md:text-2xl font-bold leading-tight mt-8">{{__('Log in to your account')}}</h1>

                <x-feedback/>
                <form class="mt-6" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700">{{ __('Email') }}</label>
                        <input type="email" name="email" id="" placeholder="Enter Email Address"
                               class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                               autofocus autocomplete required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700">{{ __('Password') }}</label>
                        <input type="password" name="password" id="" placeholder="{{ __('Enter Password') }}"
                               minlength="6"
                               class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                focus:bg-white focus:outline-none" required>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="text-right mt-2">
                            <a href="{{  route('password.request') }}"
                               class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700"> {{  __('Forgot your password?') }}
                                -</a>
                        </div>
                    @endif

                    <button type="submit" class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
              px-4 py-3 mt-6">  {{ __('Login') }}</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="text-sm text-gray-500 mt-12">&copy; {{date('Y')}} {{env('app_name')}} - All Rights
                    Reserved.</p>
            </div>
        </div>

    </section>
</x-layouts.base>
