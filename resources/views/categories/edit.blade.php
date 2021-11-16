{{--<x-layouts.app>--}}
    {{--<x-card>--}}
    {{--<x-feedback/>--}}
    {{--<div class="w-full">--}}
        {{--<div class="mt-8 p-4">--}}
            {{--<div>--}}
                {{--<x-form action="{{ route('categories.update',['category'=>$category->id]) }} " method="PUT">--}}
                    {{--@csrf--}}

                    {{--<div class="flex flex-col md:flex-row">--}}
                        {{--<div class="w-full mx-10 flex-1">--}}
                            {{--<label>{{__('Category Name')}}</label>--}}
                            {{--<div >--}}
                                {{--<x-input name="name" value="{{$category->name}}" class="input"/>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="flex flex-col md:flex-row mt-3">--}}
                        {{--<div class="w-full mx-10 flex-1">--}}
                            {{--<label>{{__('Type')}}</label>--}}
                            {{--<div >--}}
                                {{--<x-select name="type" class="select">--}}
                                    {{--<option value="users">{{__('User')}}</option>--}}
                                    {{--<option value="expenses">{{__('Expense')}}</option>--}}
                                    {{--<option value="orders">{{__('Order')}}</option>--}}
                                {{--</x-select>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="flex p-2 mt-8 mx-10">--}}
                        {{--<button type="Submit" class="btn ml-2">{{__('Save')}}</button>--}}
                        {{--<input type="button" class="btn-cancel"--}}
                               {{--name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/categories/manage')"/>--}}
                    {{--</div>--}}
                {{--</x-form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--</x-card>--}}
{{--</x-layouts.app>--}}
<div class="mx-2">
    <h2>{{__('Update category')}}</h2>
    <input type="hidden" wire:model="selected_id">
    <x-input name="name"  type="text" wire:model="name" class="input form-control input-sm"  placeholder="Name"/>
    <button  class="btn mt-1" wire:click="update()"  type="submit">{{__('Create')}}</button>
</div>