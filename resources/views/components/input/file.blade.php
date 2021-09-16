@props(['name'=>null,'label'=>'','value'=>''])
<div x-data="{photoPreview: null}" class="col-span-6 sm:col-span-4">
    <!-- Profile Photo File Input -->
    <input type="file" class="hidden"
           {{$attributes}}
           x-ref="{{$name}}"
           x-on:change="
                                    reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($el.files[0]);
                            "/>

    <x-jet-label for="{{$name}}" value="{{ __($label??$name) }}"/>

    <!-- Current Profile Photo -->
    <div class="mt-2" x-show="! photoPreview">
        {{$value}}
{{--        <img src="{{ $value }}" alt="{{ __($label ?? $name)}}" class="h-20 w-20 object-cover mx-auto">--}}
    </div>

    <!-- New Profile Photo Preview -->
    <div class="mt-2" x-show="photoPreview">
                    <span class="block w-20 h-20 mx-auto"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
    </div>

    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.{{$name}}.click()">
        {{ __('Select A New Photo') }}
    </x-jet-secondary-button>

</div>

{{--@props(['name'=>null])--}}
{{--<div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">--}}
{{--    <!-- Profile Photo File Input -->--}}
{{--    <input type="file" class="hidden"--}}

{{--           x-ref="photo"--}}
{{--           x-on:change="--}}
{{--                                    photoName = $el.files[0].name;--}}
{{--                                    const reader = new FileReader();--}}
{{--                                    reader.onload = (e) => {--}}
{{--                                        photoPreview = e.target.result;--}}
{{--                                    };--}}
{{--                                    reader.readAsDataURL($el.files[0]);--}}
{{--                            " />--}}

{{--    <x-jet-label for="photo" value="{{ __('Photo') }}" />--}}

{{--    <!-- Current Profile Photo -->--}}
{{--    <div class="mt-2" x-show="! photoPreview">--}}
{{--        <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">--}}
{{--    </div>--}}

{{--    <!-- New Profile Photo Preview -->--}}
{{--    <div class="mt-2" x-show="photoPreview">--}}
{{--                    <span class="block rounded-full w-20 h-20"--}}
{{--                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">--}}
{{--                    </span>--}}
{{--    </div>--}}

{{--    <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">--}}
{{--        {{ __('Select A New Photo') }}--}}
{{--    </x-jet-secondary-button>--}}

{{--    @if ($this->user->profile_photo_path)--}}
{{--        <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">--}}
{{--            {{ __('Remove Photo') }}--}}
{{--        </x-jet-secondary-button>--}}
{{--    @endif--}}

{{--    <x-jet-input-error for="photo" class="mt-2" />--}}
{{--</div>--}}

{{--<div x-data="imageViewer('{{$value}}')">--}}
{{--    <div class="mb-2">--}}
{{--        <!-- Show the image -->--}}
{{--        <template x-if="imageUrl">--}}
{{--            <img :src="imageUrl"--}}
{{--                 class="object-cover rounded border border-gray-200"--}}
{{--                 style="width: 100px; height: 100px;"--}}
{{--            >--}}
{{--        </template>--}}

{{--        <!-- Show the gray box when image is not available -->--}}
{{--        <template x-if="!imageUrl">--}}
{{--            <div--}}
{{--                class="border rounded border-gray-200 bg-gray-100"--}}
{{--                style="width: 100px; height: 100px;"--}}
{{--            ></div>--}}
{{--        </template>--}}

{{--        <!-- Image file selector -->--}}
{{--        <input class="mt-2" type="file" accept="image/*">--}}

{{--    </div>--}}
{{--</div>--}}
{{--<script>--}}
{{--    document.addEventListener('alpine:init', () => {--}}
{{--        Alpine.data('imageViewer', (src = '') => ({--}}

{{--            this.$nextTick(() => {--}}
{{--                imageUrl: src,--}}
{{--                    fileChosen(event)--}}
{{--                {--}}
{{--                    this.fileToDataUrl(event, src => this.imageUrl = src)--}}
{{--                },--}}

{{--                fileToDataUrl(event, callback)--}}
{{--                {--}}
{{--                    if (!event.target.files.length) return--}}

{{--                    let file = event.target.files[0],--}}
{{--                        reader = new FileReader()--}}

{{--                    reader.readAsDataURL(file)--}}
{{--                    reader.onload = e => callback(e.target.result)--}}
{{--                }--}}
{{--            ,--}}

{{--            })--}}


{{--        }))--}}
{{--    })--}}


{{--</script>--}}
