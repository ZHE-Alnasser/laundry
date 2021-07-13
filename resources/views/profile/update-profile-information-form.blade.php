<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20"
                          x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="first_name" value="{{ __('First Name') }}" />
            <x-jet-input id="first_name" type="text" class="mt-1 block w-full" wire:model.defer="state.first_name" autocomplete="first_name" />
            <x-jet-input-error for="first_name" class="mt-2" />
        </div>

        {{--<div class="col-span-6 sm:col-span-4">--}}
            {{--<x-jet-label for="testing" value="{{ __('testing') }}" />--}}
            {{--<x-jet-input id="testing" type="text" class="mt-1 block w-full" wire:model.defer="state.testing" autocomplete="testing" />--}}
            {{--<x-jet-input-error for="testing" class="mt-2" />--}}
        {{--</div>--}}

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="last_name" value="{{ __('Last Name') }}" />
            <x-jet-input id="last_name" type="text" class="mt-1 block w-full" wire:model.defer="state.last_name" autocomplete="last_name" />
            <x-jet-input-error for="last_name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phone" value="{{ __('Phone') }}" />
            <x-jet-input id="phone" class="block mt-1 w-full text-right" type="text" name="phone" wire:model.defer="state.phone"  autocomplete="phone" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="university_id" value="{{ __('name')}} {{ __('University')}}" />
            <x-select name="university_id" wire:model.defer="state.university_id">
                @foreach(\App\Models\University::all() as $university)
                    <option {{$this->user->university->id ==$university->id?'selected':''}}
                            value="{{$university->id}}">{{$university->name}}</option>
                @endforeach
            </x-select>
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="major_id" value="{{ __('Major') }}" />
            <x-select name="major_id" wire:model.defer="state.major_id">
                @foreach(\App\Models\Major::all() as $major)
                    <option {{$this->user->major->id ==$major->id?'selected':''}} value="{{$major->id}}">
                        {{$major->name}}</option>
                @endforeach
            </x-select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="twitter" value="{{ __('Twitter') }}" />
            <x-jet-input id="twitter" class="block mt-1 w-full text-right" type="url" name="twitter" wire:model.defer="state.twitter" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="linkedin" value="{{ __('LinkedIn') }}" />
            <x-jet-input id="linkedin" class="block mt-1 w-full text-right" type="url" name="linkedin" wire:model.defer="state.linkedin" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="facebook" value="{{ __('Facebook') }}" />
            <x-jet-input id="facebook" class="block mt-1 w-full text-right" type="url" name="facebook" wire:model.defer="state.facebook" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telegram" value="{{ __('Telegram') }}" />
            <x-jet-input id="telegram" class="block mt-1 w-full text-right" type="url" name="telegram" wire:model.defer="state.telegram" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="youtube" value="{{ __('Youtube') }}" />
            <x-jet-input id="youtube" class="block mt-1 w-full text-right" type="url" name="youtube" wire:model.defer="state.youtube" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="instagram" value="{{ __('Instagram') }}" />
            <x-jet-input id="instagram" class="block mt-1 w-full text-right" type="url" name="instagram" wire:model.defer="state.instagram" />
        </div>

        <div class="col-span-6 sm:col-span-4 {{ $errors->has('is_public') ? 'has-error' : '' }}">
            <label>{{__('Public')}}</label>
            <input type="checkbox" id="is_public" name="is_public" wire:model.defer="state.is_public"
                   value="1"{{ (isset($user) && $user->is_public) || old('is_public', 0) === 1 ? 'checked' : '' }}>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="role" value="{{  __('Roles').' '.__('Available') }}" />
            @foreach($this->user->getRoleNames() as $role)
                <p class="rounded-lg m-1 p-1 px-2 text-base leading-6 text-gray-500 inline-flex bg-gray-200 text-lg-center">
                    {{$role}}
                </p>
                @endforeach
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
