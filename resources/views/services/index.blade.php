@extends('components.layouts.app')

@section('content')

    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
        {{__('Services')}}</h1>
    <div class="w-full mb-4">
        <div class="line"></div>
    </div>
    @foreach($services as $service)

        <a href="/services/{{$service->slug}}">
            <div class="mx-auto">
                <div class="lg:mr-10 ml-10 mr-5">
                    <x-index-card>

                        <div class="p-6">
                            <h1>
                                {{$service->name}}
                            </h1>

                            <p class="mt-3 text-base leading-6 text-gray-900 mb-3">
                           <div class="inline-flex flex-row">
                            {{$service->price}} <h3 class="mr-2">   {{__('SR')}}</h3>
                            </div>
                        </div>

                    </x-index-card>

                </div>
            </div>
        </a>

    @endforeach

@endsection
