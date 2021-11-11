<x-layouts.app>
    <x-card>
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('expenses.update',['expense'=>$expense->id]) }} " method="PUT">
@csrf
                        @include('expenses._fields')
                    </x-form>
                </div>
            </div>
        </div>
    </x-card>
</x-layouts.app>