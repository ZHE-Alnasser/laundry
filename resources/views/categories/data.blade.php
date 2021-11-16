<x-layouts.app>


    <x-card>
        {{--<div class="flex justify-between mb-5 flex-row mt-5">--}}
            {{--<a class="btn inline-flex mb-2 justify-center expenses-center" href="{{"/categories/create"}}">--}}
                {{--<svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                     {{--fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"--}}
                     {{--class="feather feather-plus-square">--}}
                    {{--<rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>--}}
                    {{--<line x1="12" y1="8" x2="12" y2="16"></line>--}}
                    {{--<line x1="8" y1="12" x2="16" y2="12"></line>--}}
                {{--</svg>--}}
                {{--<span>{{__('Create')}}</span>--}}
            {{--</a>--}}

        {{--</div>--}}


        {{--<div class="py-6 mx-3 sm:flex ">--}}

<div >
            @if($categories)
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-x divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
                            {{__('Name')}}
                        </th>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">

                                        </th>
                                          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">

                                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                    @foreach($categories as $category)
                        <td class="py-5  border-b">

                            <td class="px-6 py-4 whitespace-nowrap">{{$category->name}}</td>
                         <td class="px-6 py-4 whitespace-nowrap">
                            {{--@include('components.table-actions')</td>--}}
                        </tr>
                    @endforeach
                    </tbody>

                </table>
                            </div>
                        </div>
                    </div>
                </div>

            @endif


        {{--<div class="sm:w-1/2 sm:mx-5" x-data>--}}
   {{--@if($message)--}}
                {{--<div class="bg-green-600 text-white rounded p-3">--}}
                    {{--{{$message}}--}}
                {{--</div>--}}
            {{--@endif--}}
            {{--<div class="flex my-2"><h3>{{__('Category name')}}:</h3>--}}
                {{--<x-input name="name" type="text"  class="mx-9 px-3" wire:model="name" @keyup.enter="$refs.registerId.focus()"/>--}}
            {{--<x-input name="type" type="text"  class="mx-9 px-3" wire:model="type" @keyup.enter="$refs.registerId.focus()"/>--}}

            {{--</div>--}}
            {{--@error('name') <span class="text-red-600 error">{{ $message }}</span> @enderror--}}
            {{--<div class=" mt-5">--}}
                {{--<button class="btn "  x-ref="submit" wire:click="store()">{{__('Register')}}</button>--}}
            {{--</div>--}}
        {{--</div>--}}
                {{--</div>--}}

        {{--</div>--}}

                <form wire:submit.prevent="submit">
                    <div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Enter Name</label>
                            <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">

                        {{--<div class="form-group">--}}
                            {{--<label>Enter Email</label>--}}
                            {{--<input type="text" class="form-control input-sm" placeholder="Enter type" wire:model="category.type">--}}
                        {{--</div>--}}
                        <button wire:click="store()" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                </form>
</div>

    </x-card>


</x-layouts.app>