

<x-tab name="__('Information')">

    <div class="flex my-2">

        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Name')}}</label><x-input class="input mx-2 " name="company_name"  :value="setting('company_name')"/></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Phone')}}</label><x-input class="input mx-2" name="company_phone" :value="setting('company_phone')"/></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Mobile')}}</label><x-input class="input mx-2" name="company_mobile" :value="setting('company_mobile')" /></span>
    </div>

    <hr>
    <div class="flex my-2 mt-4">
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Email')}}</label><x-input class="input mx-2" name="company_email" :value="setting('company_email')"/></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Website')}}</label><x-input class="input mx-2" name="company_website" :value="setting('company_website')"/></span>
        <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('VAT Number')}}</label><x-input class="input mx-2" name="vat_number" :value="setting('vat_number')"/></span>
    </div>

    <hr>
    <div class="flex my-4">
        <div class="grid mx-2 flex-1">
            <label for="company_address_1" class="text-sm font-bold">{{__('Company Address 1')}}</label>
            <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_1" value="setting('comapny_address_1')"/>
        </div>
        <div class="grid mx-2 flex-1">
            <label for="company_address_2" class="text-sm font-bold">{{__('Company Address 2')}}</label>
            <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_2" value="setting('comapny_address_2')"/>
        </div>
    </div>




    <div class="md:w-1/2 px-1">

        <div class="mt-3">
            <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Logo')}}</label>
                <x-input class="input" type="file" name="company_logo" type="file py-1"/></span>
        </div>
    </div>

</x-tab>