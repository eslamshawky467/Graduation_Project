<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('اعدادات الحساب') }}
    </x-slot>

    <x-slot name="description">

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

                <x-jet-label for="photo" value="{{ __('صورة') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-30 w-30 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('اختر من الصور') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('ازالة الصورة') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('الاسم') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="address" value="{{ __('العنوان') }}" />
            <x-jet-input id="address" type="text" class="mt-1 block w-full" wire:model.defer="state.address" autocomplete="address" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="socialid" value="{{ __('رقم البطاقة') }}" />
            <x-jet-input id="socialid" type="text" class="mt-1 block w-full" wire:model.defer="state.socialid" autocomplete="socialid" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="age" value="{{ __('السن') }}" />
            <x-jet-input id="age" type="number" class="mt-1 block w-full" wire:model.defer="state.age" autocomplete="age" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="gender" value="{{ __('النوع') }}" />
            <x-jet-input id="gender" type="text" class="mt-1 block w-full" wire:model.defer="state.gender" autocomplete="gender" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="phonenumber" value="{{ __('رقم الهاتف المحمول') }}" />
            <x-jet-input id="phonenumber" type="number" class="mt-1 block w-full" wire:model.defer="state.phonenumber" autocomplete="phonenumber" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('البريد الالكتروني') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('تم الحفظ') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
