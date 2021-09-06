<div class="w-full px-1">
    <label>{{__('Language')}}</label>
    <div class="mt-3">
        <x-input.select name="language">
            <option value="ar" {{setting('language')=='ar'?'selected':''}}>{{__('Arabic')}}</option>
            <option value="en" {{setting('language')=='en'?'selected':''}}>{{__('English')}}</option>
        </x-input.select>
    </div>
</div>
