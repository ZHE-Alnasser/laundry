@extends('components.layouts.app')
@section('content')
    <div class="md:flex border container p-10">
<div>
    @if($user->hasMedia('users') )
        <div class="object-cover h-48 w-full">
            @foreach($user->getMedia('users') as $attachment)
                {{$attachment}}
            @endforeach
        </div>
    @else
        <div class="md:flex-shrink-0 mx-10">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1024px-Circle-icons-profile.svg.png" alt="image" class="md:w-40 rounded-full">
        </div>
    @endif
</div>
        <div>
            <h1 class="block mt-5 mx-10 text-2xl leading-tight font-semibold text-gray-900">{{$user->name }}</h1>
            <h1 class="block mt-5 mx-10 text-2xl leading-tight font-semibold text-gray-900">{{ $user->first_name}} {{$user->last_name}}</h1>
            <p class="mt-5 mx-10 text-xl leading-tight text-gray-500">{{ $user->university->name}}, {{$user->major}}</p>
            <br>
            @auth
            <a class="btn bg-green-300 p-2 mt-5 mx-10 text-gray-800 rounded-lg" href="profile/{{$user->slug}}/edit"> Edit Profile</a>
            @endauth

        </div>

    </div>
    <div class="md:flex container px-20 pt-10">
        <div>
            <h1 class="block mt-5 mx-10 text-lg leading-tight font-semibold text-gray-900">{{__('Phone Number')}}: {{ $user->phone }}</h1>
            <h1 class="block mt-5 mx-10 text-lg leading-tight font-semibold text-gray-900">{{__('Email')}}: {{ $user->email }}</h1>
            <h1 class="block mt-5 mx-10 text-lg leading-tight font-semibold text-gray-900">{{__('Twitter')}}: {{ $user->twitter }}</h1>
            <h1 class="block mt-5 mx-10 text-lg leading-tight font-semibold text-gray-900">{{__('Facebook')}}: {{ $user->facebook }}</h1>
        </div>

    </div>
    <br>

@endsection

