
<x-layouts.base>

    <x-jet-authentication-card>
        <x-slot name="logo">
            <img  src="{{asset('/img/favicon/logo.png')}}" alt="{{__('logo')}}" class="mx-3 mt-2 w-20">

        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class=" input block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-layouts.base>
