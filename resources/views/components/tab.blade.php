@props(['name'])

<div class=tab" x-data="{
        id: '',
        name: '{{ $name }}',
        show: false,
        showIfActive(active) {
            this.show = (this.name === active);
        }
    }"
     x-show="show"
     role="tabpanel"
     :aria-labelledby="`tab-${id}`"
     :id="`tab-panel-${id}`"
>
    {{ $slot }}
</div>