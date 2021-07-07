<div>

    <div class="w-full flex items-center flex-col lg:flex-row lg:justify-between mb-5">
        @include('components.data.pages')
        @if($selected['show_filters'])
            @include('components.data.filters')
        @endif

    </div>
    <div>
        <x-spin wire:loading.flex class="text-center"/>
        {{$slot}}
    </div>

    <script>
        window.suggestedTags = {!! $tagsName??''!!}
    </script>
</div>



