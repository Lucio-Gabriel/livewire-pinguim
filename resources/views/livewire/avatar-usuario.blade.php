<div>

    <form wire:submit.prevent>

        <div>
            <x-input-label for="avatar" :value="__('Avatar')" />

            @if ($this->avatar)
                <img src="{{ $avatar->temporaryUrl() }}" alt="">
            @endif

            <x-text-input
            wire:model.live="avatar"
            id="avatar" class="block mt-1 w-full"
            type="file" name="avatar" />
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>

        <br>

        <x-primary-button>
            Save
        </x-primary-button>
    </form>

</div>
