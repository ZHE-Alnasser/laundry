<x-layouts.app>
    <x-card>
<div>




    <div class="py-6 mx-3 sm:flex ">


            @if($categories)
                <table class="w-full table-auto">
                    <thead class="bg-green-300">
                    <tr>

                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Name')}}
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white  divide-y divide-gray-200">
                    @foreach($categories as $category)
                        <tr class="py-5  border-b">

                            <td class="px-6 py-4 whitespace-nowrap">{{$category->name}}</td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>


            @endif
        </x-card>

        <div class="sm:w-1/2 sm:mx-5">
            @if($message)
                <div class="bg-green-600 text-white rounded p-3">
                    {{$message}}
                </div>
            @endif

            @error('category.name') <span class="text-red-600 error">{{ $message }}</span> @enderror
            <div class="flex my-2"><h3>{{__('Name')}}:</h3>
                <x-input type="text" name="name" class="mx-8 px-3" wire:model="category.name"/>
            </div>
            @error('category.name') <span class="text-red-600 error">{{ $message }}</span> @enderror


                <button class="btn " wire:click="submit()">{{__('Register')}}</button>
            </div>
        </div>

    </div>

</div>
</x-layouts.app>