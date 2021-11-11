<x-layouts.app>
    <x-card>
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('users.update',['user'=>$user->id]) }} " method="PUT">
                        @csrf


@include('users._fields')
                    </x-form>
                </div>
            </div>
        </div>
    </x-card>
</x-layouts.app>
