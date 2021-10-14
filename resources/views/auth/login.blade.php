<x-layouts.base>

    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">

            <img src="/img/laundry.png"
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
                        <input type="email" name="email" id="" placeholder="{{__('Enter Email Address')}}"
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

                <p class="text-sm text-gray-500 mt-12">&copy; {{date('Y')}} {{env('app_name')}} - {{__('All Rights Reserved.')}}</p>
            </div>
        </div>

    </section>
</x-layouts.base>
