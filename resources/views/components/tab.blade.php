@props(['name'])

<div
        x-ref="{{$name}}"
        x-show="activeTab == $el.getAttribute('x-ref')"
        role="tabpanel"
        :aria-labelledby="`tab-${$el.getAttribute('x-ref')}`"
        :id="`tab-panel-${$el.getAttribute('x-ref')}`"
        class="h-full"
>
    {{ $slot }}
</div>
