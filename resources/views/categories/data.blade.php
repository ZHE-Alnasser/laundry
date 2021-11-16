<x-card>

    @if($message)
        <div class="bg-green-100 text-green-600 rounded p-3 mb-4">
            {{$message}}
        </div>


    @endif
    <div class="flex">

        @if($updateMode)
            @include('categories.edit')
        @else
            @include('categories.create')
        @endif




        <div class="mx-8 flex flex-col">
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
                                    <td>
                                        <div class="flex">
                                            <a wire:click="edit({{$category->id}})" class="p-1 pt-1 mb-3  text-blue-600 hover:bg-blue-600 hover:text-white rounded"> <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg> </a>|

                                            <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                                            <script>
                                                window.confirm  = async ($event) => {
                                                    swal("تأكيد عملية الحذف", {
                                                        icon: "error",
                                                        dangerMode: true,
                                                        buttons: ["إلغاء", "احذف"],
                                                        confirmButtonColor: '#DD6B55',
                                                    }).then(function (isConfirm) {
                                                        if (isConfirm) {
                                                            $event.target.submit();
                                                        }
                                                        $event.preventDefault()
                                                    });
                                                }
                                            </script>
                                            <form x-data x-on:submit.prevent="confirm($event)">
                                                @csrf
                                                <a wire:click="destroy({{$category->id}})"     class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                              clip-rule="evenodd"></path>
                                                    </svg> </a>
                                            </form>
                                        </div>
                                    </td>

                            </tr>
                            @endforeach
                            </tbody>

                        </table>


                    </div>

                </div>

            </div>
        </div>
    </div>
</x-card>