<div class="sans-serif" x-data="{checked : false}">
    <input class="clip" type="checkbox" id="check" x-model="checked">
    <label class="flex items-center pa3" for="check">
        <span aria-hidden="true" class="flex items-center w2 h1 ba bw1 br-pill" :class="checked ? 'bg-blue b--blue' : 'bg-gray b--gray'">
            <span class="db w-50 h-100 h1 br-100 bg-white" :class="checked ? 'ml-auto' : ''"></span>
        </span>
        <span class="ml2 gray">Activate plan</span>
    </label>
</div>


{{--<div class="sans-serif" x-data="{checked : false}">--}}
{{--    <input class="clip" type="checkbox" id="check" x-model="checked">--}}
{{--    <label class="flex items-center pa3" for="check">--}}
{{--        <span aria-hidden="true" class="flex items-center w2 h1 ba bw1 br-pill" :class="checked ? 'bg-blue b--blue' : 'bg-gray b--gray'">--}}
{{--            <span class="db w-50 h-100 h1 br-100 bg-white" :class="checked ? 'ml-auto' : ''"></span>--}}
{{--        </span>--}}
{{--        <span class="ml2 gray">Activate plan</span>--}}
{{--    </label>--}}
{{--</div><div class="sans-serif" x-data="{checked : false}">--}}
{{--    <input class="clip" type="checkbox" id="check" x-model="checked">--}}
{{--    <label class="flex items-center pa3" for="check">--}}
{{--        <span aria-hidden="true" class="flex items-center w2 h1 ba bw1 br-pill" :class="checked ? 'bg-blue b--blue' : 'bg-gray b--gray'">--}}
{{--            <span class="db w-50 h-100 h1 br-100 bg-white" :class="checked ? 'ml-auto' : ''"></span>--}}
{{--        </span>--}}
{{--        <span class="ml2 gray">Activate plan</span>--}}
{{--    </label>--}}
{{--</div>--}}
