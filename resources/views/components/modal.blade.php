@props(['name'=>'','open'=>'false','title'=>''])

<div x-data="{ open: {{$open}}, name: '{{ $name }}' }"
     x-on:modal.window="open = ($event.detail === name)"
     {{--<div x-data="{ open: {{$open??'false'}}, name: '{{ $name }}' }" x-on:modal.window="open = ($event.detail === name)"--}}

     @keydown.escape.window="open = false"
     :id="name"
     style="display: none"
     x-init="
  () =>
  $watch('open', value => {
    if (value === true) { document.body.classList.add('overflow-hidden') }
    else { document.body.classList.remove('overflow-hidden') }
  });"
     x-show="open"
     class="fixed z-10 inset-0 overflow-y-auto">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div x-show="open" @click="open = false" x-description="Background overlay, show/hide based on modal state."
             x-transition:enter="ease-out duration-150" x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-150"
             x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>
        <div x-show="open" x-description="Modal panel, show/hide based on modal state."
             x-transition:enter="ease-out duration-200"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="inline-block align-bottom bg-white rounded-lg text-right overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle lg:max-w-screen-lg md:max-w-screen-md xl:max-w-screen-xl  4xl:max-w-screen-4xl sm:w-full"
             role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="flex flex-row-reverse items-center justify-between px-5 bg-gray-100">
                <button type="reset" @click="open=false"
                        type="button" class="p-3 transition duration-500 hover:scale-125">
{{--                    <x-heroicon-o-x class="h-8 w-8"/>--}}
                    X
                </button>
                <h3 class="text-lg leading-6 font-medium" id="modal-headline">
                    {{ $title??'' }}
                </h3>
            </div>
            <hr class="bg-primary h-1 mt-0 px-5">
            <div {{$attributes}}>

                <div class="bg-white px-4">
                    <div class="sm:flex sm:items-start">
                        {{--{{$icon??''}}--}}
                        <div class="mt-3 sm:mt-0 sm:ml-4 flex-1">
                            {{--                            <p class="text-sm text-gray-500">--}}
                            {{ $body??'' }}
                            {{ $slot }}
                            {{--                            </p>--}}
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    {{ $footer??'' }}

                </div>
            </div>
        </div>
    </div>
</div>


{{--@props(['id', 'maxWidth'])--}}

{{--@php--}}
{{--$id = $id ?? md5($attributes->wire('model'));--}}

{{--$maxWidth = [--}}
{{--    'sm' => 'sm:max-w-sm',--}}
{{--    'md' => 'sm:max-w-md',--}}
{{--    'lg' => 'sm:max-w-lg',--}}
{{--    'xl' => 'sm:max-w-xl',--}}
{{--    '2xl' => 'sm:max-w-2xl',--}}
{{--][$maxWidth ?? '2xl'];--}}
{{--@endphp--}}

{{--<div--}}
{{--    x-data="{--}}
{{--        show: @entangle($attributes->wire('model')).defer,--}}
{{--        focusables() {--}}
{{--            // All focusable element types...--}}
{{--            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'--}}

{{--            return [...$el.querySelectorAll(selector)]--}}
{{--                // All non-disabled elements...--}}
{{--                .filter(el => ! el.hasAttribute('disabled'))--}}
{{--        },--}}
{{--        firstFocusable() { return this.focusables()[0] },--}}
{{--        lastFocusable() { return this.focusables().slice(-1)[0] },--}}
{{--        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },--}}
{{--        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },--}}
{{--        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },--}}
{{--        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },--}}
{{--    }"--}}
{{--    x-init="$watch('show', value => {--}}
{{--        if (value) {--}}
{{--            document.body.classList.add('overflow-y-hidden');--}}
{{--            {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}--}}
{{--        } else {--}}
{{--            document.body.classList.remove('overflow-y-hidden');--}}
{{--        }--}}
{{--    })"--}}
{{--    x-on:close.stop="show = false"--}}
{{--    x-on:keydown.escape.window="show = false"--}}
{{--    x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"--}}
{{--    x-on:keydown.shift.tab.prevent="prevFocusable().focus()"--}}
{{--    x-show="show"--}}
{{--    id="{{ $id }}"--}}
{{--    class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"--}}
{{--    style="display: none;"--}}
{{-->--}}
{{--    <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300"--}}
{{--                    x-transition:enter-start="opacity-0"--}}
{{--                    x-transition:enter-end="opacity-100"--}}
{{--                    x-transition:leave="ease-in duration-200"--}}
{{--                    x-transition:leave-start="opacity-100"--}}
{{--                    x-transition:leave-end="opacity-0">--}}
{{--        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>--}}
{{--    </div>--}}

{{--    <div x-show="show" class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"--}}
{{--                    x-transition:enter="ease-out duration-300"--}}
{{--                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"--}}
{{--                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"--}}
{{--                    x-transition:leave="ease-in duration-200"--}}
{{--                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"--}}
{{--                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">--}}
{{--        {{ $slot }}--}}
{{--    </div>--}}
{{--</div>--}}
