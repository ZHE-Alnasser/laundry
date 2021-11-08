<x-layouts.app>
    <x-card>
        <x-feedback/>
        <div class="w-full">
            <div class="mt-8 p-4">
                <div>
                    <x-form action="{{ route('branches.update',['branch'=>$branch->id]) }} " method="PUT">
                        @csrf

                        <div class="flex flex-col md:flex-row">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('Branch Name')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required  name="name" value="{{$branch->name}}" class="input"/>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row mt-5">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('Branch Address')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required  name="address" value="{{$branch->address}}" class="input"/>
                                </div>
                            </div>
                        </div>
                <div class="flex flex-col md:flex-row mt-5">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('Phone')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required type="number" minlength="10" maxlength="10"  name="phone" value="{{$branch->phone}}" class="input"/>
                                </div>
                            </div>
                        </div>

          <div class="flex flex-col md:flex-row mt-5">
                            <div class="w-full sm:mx-10 flex-1">
                                <label>{{__('VAT Number')}}<span class="text-red-600"> *</span></label>
                                <div >
                                    <x-input required type="number"  name="vat_number" value="{{$branch->vat_number}}" class="input"/>
                                </div>
                            </div>
                        </div>



                        <div class="flex p-2 mt-8 sm:mx-10">
                            <button type="Submit" class="btn ml-2">{{__('Save')}}</button>
                            <input type="button" class="btn-cancel"
                                   name="cancel" value="{{__('Cancel')}}" onClick="window.location.replace('/settings')"/>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </x-card>
</x-layouts.app>
