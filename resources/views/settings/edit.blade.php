<x-layouts.admin>
        <x-form action="{{url('settings')}}" :crudButton="false" method="post">
            {{--<x-tabs :active="__('Information')">--}}
                {{--@include('settings.partials.company-info')--}}
            {{--</x-tabs>--}}
            <x-tabs :active="__('Information')">
                <x-tab :name="__('Information')">
                    <div class="sm:flex my-2">

                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Name')}}</label><x-input class="input mx-2 " name="company_name"  :value="setting('company_name')"/></span>
                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Phone')}}</label><x-input class="input mx-2" name="company_phone" :value="setting('company_phone')"/></span>
                        {{--@dd(setting('company_name'))--}}
                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Mobile')}}</label><x-input class="input mx-2" name="company_mobile" :value="setting('company_mobile')" /></span>
                    </div>

                    <hr>
                    <div class="sm:flex my-2 mt-4">
                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Email')}}</label><x-input class="input mx-2" name="company_email" :value="setting('company_email')"/></span>
                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Website')}}</label><x-input class="input mx-2" name="company_website" :value="setting('company_website')"/></span>
                        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('VAT Number')}}</label><x-input class="input mx-2" name="vat_number" :value="setting('vat_number')"/></span>
                    </div>

                    <hr>
                    <div class="sm:flex my-4">
                        <div class="grid mx-2 flex-1">
                            <label for="company_address_1" class="text-sm font-bold">{{__('Company Address 1')}}</label>
                            <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_1" :value="setting('comapny_address_1')"/>
                        </div>
                        <div class="grid mx-2 flex-1">
                            <label for="company_address_2" class="text-sm font-bold">{{__('Company Address 2')}}</label>
                            <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_2" :value="setting('comapny_address_2')"/>
                        </div>
                        {{--</div>--}}
                    </div>

                </x-tab>
                <x-tab :name="__('timeframe')">
                    <div class="">
                        @livewire('time-frames-datatable')
                    </div>
                </x-tab>

                <x-tab :name="__('general')">

                    <div class="w-full px-1">
                        <label>{{__('Language')}}</label>
                        <div class="mt-3">
                            <x-select name="language">
                                <option value="ar" {{setting('language')=='ar'?'selected':''}}>{{__('Arabic')}}</option>
                                <option value="en" {{setting('language')=='en'?'selected':''}}>{{__('English')}}</option>
                            </x-select>
                        </div>
                    </div>
                </x-tab>
            </x-tabs>
           <div class="mx-5"><button class="btn mt-8">{{__('Edit')}}</button></div>

            {{--@include('app_settings::_settings')--}}
        </x-form>
</x-layouts.admin>