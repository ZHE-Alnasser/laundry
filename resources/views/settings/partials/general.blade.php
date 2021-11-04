

<x-tab :name="__('General')">
    <x-form action="{{url('settings')}}" :crudButton="false" method="post">

    <div class="sm:flex my-2">

        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Name')}}</label><x-input class="input mx-2 " name="company_name"  :value="setting('company_name')"/></span>
       {{--        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Phone')}}</label><x-input class="input mx-2" name="company_phone" :value="setting('company_phone')"/></span>--}}
        {{--@dd(setting('company_name'))--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Mobile')}}</label><x-input class="input mx-2" name="company_mobile" :value="setting('company_mobile')" /></span>--}}
    </div>

    <hr>
    <div class="sm:flex my-2 mt-4">
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Email')}}</label><x-input class="input mx-2" name="company_email" :value="setting('company_email')"/></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Website')}}</label><x-input class="input mx-2" name="company_website" :value="setting('company_website')"/></span>
    {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('VAT Number')}}</label><x-input class="input mx-2" name="vat_number" :value="setting('vat_number')"/></span>--}}
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('VAT Rate')}}</label><x-input class="input mx-2" name="vat_rate" value="{{setting('vat_rate')}}" :value="setting('vat_rate')"/></span>
    </div>

    <hr>
    {{--<div class="sm:flex my-4">--}}
        {{--<div class="grid mx-2 flex-1">--}}
            {{--<label for="company_address_1" class="text-sm font-bold">{{__('Company Address 1')}}</label>--}}
            {{--<x-textarea class="textarea textarea-bordered border-gray-300"  name="company_address_1" :value="setting('company_address_1')">{{setting('company_address_1')}}</x-textarea>--}}
        {{--</div>--}}
        {{--<div class="grid mx-2 flex-1">--}}
            {{--<label for="company_address_2" class="text-sm font-bold">{{__('Company Address 2')}}</label>--}}
            {{--<x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_2"  :value="setting('company_address_2')">{{setting('company_address_2')}}</x-textarea>--}}
        {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="w-full px-1">
        <label>{{__('Language')}}</label>
        <div class="mt-3">
            <x-select name="language">
                <option value="ar" {{setting('language')=='ar'?'selected':''}}>{{__('Arabic')}}</option>
                <option value="en" {{setting('language')=='en'?'selected':''}}>{{__('English')}}</option>
            </x-select>


        </div>
    </div>


        {{--<div class="md:w-1/2 px-1">--}}

            {{--<div class="mt-3">--}}
                {{--<x-input type="file" name="logo" type="file"/>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="field mb-5 mt-5">
            <label class=" font-extrabold leading-8 tracking-tight  sm:leading-9"
                   for="logo">{{__('Add Image')}}</label>
            <div class="mt-1">

                <label for="logo" class="btn">
<span>
{{-- @svg('heroicon-o-upload','h8 w-8 inline')--}}
    <i data-feather="image" class="ml-1"></i>
    {{__('Upload image')}}
</span>
                    <input class="hidden"  id="logo" name="logo" type="file"/>
                </label>





            </div>
        </div>
    <button  class="btn mt-8">{{__('Edit')}}</button>
    </x-form>
</x-tab>




