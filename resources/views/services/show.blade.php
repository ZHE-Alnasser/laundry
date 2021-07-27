<x-layouts.app>
   {{--<x-card>--}}
       {{--@section('content')--}}
    <h1 class="mt-3 text-4xl">{{$service->name}}</h1>
    <div class="flex mt-3">
        <p class="mx-5 text-base leading-6 text-gray-500">
                    <span class="mt-3 text-base leading-6 text-gray-900 ml-2">
                        {{__('Price')}}:
                    </span>
            {{$service->price}}
        </p>

    </div>
    <p class="mt-3 text-gray-500 p-5 text-justify mb-10">
        {{$service->description}}
    </p>
   {{--@endsection--}}
       {{--</x-card>--}}
</x-layouts.app>



