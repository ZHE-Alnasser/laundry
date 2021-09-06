<x-layouts.app>
    {{--<x-card>--}}
    {{--@section('content')--}}

    <div class="lg:p-6 pl-3">
        <div class="object-contain lg:w-80 md:w-72 ml-auto mr-auto block ">
            @foreach($item->getMedia('items') as $attachment)
                {{$attachment}}
            @endforeach
        </div>

    </div>

    <h1 class="mt-3 text-4xl">{{$item->name}}</h1>

    {{--@endsection--}}
    {{--</x-card>--}}
</x-layouts.app>



