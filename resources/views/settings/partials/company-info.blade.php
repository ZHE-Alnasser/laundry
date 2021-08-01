<x-tab :name="__('Information')">
    <div class="flex">
        <x-input name="company_name" :value="setting('company_name')"/>
        <x-input name="company_phone" :value="setting('company_phone')"/>
        <x-input name="company_mobile" :value="setting('company_mobile')"/>
    </div>

    <hr>
    <div class="flex">
        <x-input name="company_email" :value="setting('company_email')"/>
        <x-input name="company_website" :value="setting('company_website')"/>
        <x-input name="vat_number" :value="setting('vat_number')"/>
    </div>

    <hr>
    <div class="flex my-2">
        <div class="flex-1">
            <label for="company_address_1">{{__('Company Address 1')}}</label>
            <x-textarea name="company_address_1" :value="setting('comapny_address_1')"/>
        </div>
        <div class="flex-1">
            <label for="company_address_2">{{__('Company Address 2')}}</label>
            <x-textarea name="company_address_2" :value="setting('comapny_address_2')"/>
        </div>
    </div>




    <div class="md:w-1/2 px-1">

        <div class="mt-3">
            <x-input type="file" name="company_logo" type="file"/>
        </div>
    </div>

</x-tab>