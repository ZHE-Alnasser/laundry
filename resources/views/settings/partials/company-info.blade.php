

{{--<x-tab class="tab" name="__('Information')">--}}

    {{--<div class="flex my-2">--}}

        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Name')}}</label><x-input class="input mx-2 " name="company_name"  :value="setting('company_name')"/></span>--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Phone')}}</label><x-input class="input mx-2" name="company_phone" :value="setting('company_phone')"/></span>--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Mobile')}}</label><x-input class="input mx-2" name="company_mobile" :value="setting('company_mobile')" /></span>--}}
    {{--</div>--}}

    {{--<hr>--}}
    {{--<div class="flex my-2 mt-4">--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Email')}}</label><x-input class="input mx-2" name="company_email" :value="setting('company_email')"/></span>--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Website')}}</label><x-input class="input mx-2" name="company_website" :value="setting('company_website')"/></span>--}}
        {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('VAT Number')}}</label><x-input class="input mx-2" name="vat_number" :value="setting('vat_number')"/></span>--}}
    {{--</div>--}}

    {{--<hr>--}}
    {{--<div class="flex my-4">--}}
        {{--<div class="grid mx-2 flex-1">--}}
            {{--<label for="company_address_1" class="text-sm font-bold">{{__('Company Address 1')}}</label>--}}
            {{--<x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_1" value="setting('comapny_address_1')"/>--}}
        {{--</div>--}}
        {{--<div class="grid mx-2 flex-1">--}}
            {{--<label for="company_address_2" class="text-sm font-bold">{{__('Company Address 2')}}</label>--}}
            {{--<x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_2" value="setting('comapny_address_2')"/>--}}
        {{--</div>--}}
    {{--</div>--}}




    {{--<div class="md:w-1/2 px-1">--}}

        {{--<div class="mt-3">--}}
            {{--<span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Logo')}}</label>--}}
                {{--<input class="input" type="file" name="company_logo" type="file py-1"/></span>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--</x-tab>--}}


<div class=" mt-4  rounded">
    <!-- Tabs -->
    <ul id="tabs" class="inline-flex w-full px-1 pt-2 ">
        <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">{{__('Company Information')}}</a></li>
        <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">{{__('Time Frame')}}</a></li>
        {{--<li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Electronics</a></li>--}}
        {{--<li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Others</a></li>--}}
    </ul>

    <!-- Tab Contents -->
    <div id="tab-contents">
        <div id="first" class="p-4">
            <x-tab class="tab" name="__('Information')">
            <div class="sm:flex my-2">

                <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Name')}}</label><x-input class="input mx-2 " name="company_name"  :value="setting('company_name')"/></span>
                <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Phone')}}</label><x-input class="input mx-2" name="company_phone" :value="setting('company_phone')"/></span>
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
                    <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_1" value="setting('comapny_address_1')"/>
                </div>
                <div class="grid mx-2 flex-1">
                    <label for="company_address_2" class="text-sm font-bold">{{__('Company Address 2')}}</label>
                    <x-textarea class="textarea textarea-bordered border-gray-300" name="company_address_2" value="setting('comapny_address_2')"/>
                </div>
            {{--</div>--}}
            </div>
            </x-tab>



            <div class="md:w-1/2 px-1">

                <div class="mt-3">
            <span class=" flex-1 mx-2 "><label class="text-sm font-bold">{{__('Company Logo')}}</label>
                <input class="input" type="file" name="company_logo" type="file py-1"/></span>
                </div>
            </div>
        </div>
        <div id="second" class="hidden p-4">
            <div class="sm:mx-40">
                <div class="flex flex-col md:flex-row">
                    <div class="w-full mx-2 flex-1">
                        <label>{{__('Time Frame Name')}}</label>
                        <div >
                            <x-input name="time_frame_name" :value="setting('time_frame_name')" class="input"/>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col mt-4 md:flex-row">
                    <div class="w-full mx-2 flex-1">
                        <label>{{__('Description')}}</label>

                        <x-input name="time_frame_description" :value="setting('time_frame_description')" class="input"/>

                    </div>
                </div>

            </div>
        </div>
        <div id="third" class="hidden p-4">
            Third tab
        </div>
        <div id="fourth" class="hidden p-4">
            Fourth tab
        </div>
    </div>
</div>

<script>
    let tabsContainer = document.querySelector("#tabs");

    let tabTogglers = tabsContainer.querySelectorAll("a");
    console.log(tabTogglers);

    tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

                tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                    continue;
                }
                tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
        });
    });

    document.getElementById("default-tab").click();

</script>