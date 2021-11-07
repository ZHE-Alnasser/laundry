


<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">{{__('Description')}}</th>
                        <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">{{__('username')}}</th>
                        <th scope="col" class="px-6 py-3  text-xs font-medium text-gray-500 uppercase tracking-wider">{{__('Changes')}}</th>
                    </tr>
                    </thead>
@foreach ($activities as $activity)

                        <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        <span class='font-bold f'> . {{__("$activity->description")}} . </span></div></div></td>
                            <td class="px-6 py-4 whitespace-nowrap">    <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900"><span class='font-bold f'> . {{optional(App\Models\User::find($activity->causer_id))->name }} . </span></div></div></td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
@php
        $changes= "<div class='md:flex text-xs md:text-base'>";
            foreach (json_decode($activity->properties) as $key => $value) {

                $changes .= '<div class="flex flex-col mx-2 f">';
                $changes .= '<div class="text-blue-500 text-sm">' . __($key) . '</div><br>';
                foreach ($value as $k => $val) {
                    if ($k == 'updated_at') continue;
                    $value = $k == 'password' ? '******' : $val;
                    $changes .= '<div><span class="font-bold">' . __('validation.attributes.'.$k) . ': </span>' . $value . '<br></div>';
                }
        $changes .='</div>';
            }
        $changes .='</div>';
        echo $changes;
@endphp
                                    </div>
                                </div>
                            </td>

                        </tr>
                        </tbody>

@endforeach
                </table>
            </div>
        </div>
    </div>
</div>