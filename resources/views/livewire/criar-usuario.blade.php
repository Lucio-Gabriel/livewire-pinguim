<div>

     <form method="POST" wire:submit.prevent="save">

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input
            wire:model.live="name"
            id="name" class="block mt-1 w-full"
            type="text" name="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
            wire:model.live="email"
            id="email" class="block mt-1 w-full"
            type="text" name="email"
            autocomplete="username"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                <span wire:loading wire:target="save" class="animate-bounce mr-1">🔥</span>
                {{ __('Save') }}
            </x-primary-button>
        </div>


        @dump($saving)

        <div x-data="{open: @entangle('saving')}">

            <div x-show="open">
                Bem vindo ao Sistema
            </div>

            <div>
                Name::
                <span x-text="$wire.name"></span>
            </div>

            <button type="button" @click="open = false">
                Back
            </button>

        </div>

     </form>

</div>
