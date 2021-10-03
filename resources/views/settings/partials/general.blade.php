
<x-tab :name="__('General')">

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