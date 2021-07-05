@if (count($errors))
    <div class="bg-red-100 border-r-4 border-red-500 p-4 my-3" role="alert">
        @foreach ($errors->all() as $error)
            <p class="text-red-700"> - {{ __($error) }}</p>
        @endforeach
    </div>
@endif

@if (session('info'))
    <div class="bg-blue-100 border-r-4 border-blue-500 p-4 my-3" role="alert">
        <p class="text-blue-700">{{ session('info') }}</p>
    </div>
@endif

@if (session('message') )
    <div class="bg-blue-100 border-r-4 border-blue-500 p-4 my-3" role="alert">
        <p class="text-blue-700">{{ session('message') }}</p>
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 border-r-4 border-green-500 p-4 my-3" role="alert">
        <p class="text-green-700">{{ session('success') }}</p>
    </div>
@endif
@if (session('danger'))
    <div class="bg-red-100 border-r-4 border-red-500 p-4 my-3" role="alert">
        <p class="text-red-700">{{ session('danger') }}</p>
    </div>
@endif

