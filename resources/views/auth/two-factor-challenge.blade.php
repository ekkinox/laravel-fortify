<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Please enter your 2 factor authentication code before continuing.') }}
    </div>

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
        <div>
            <x-input-label for="code" :value="__('Code')" />

            <x-text-input id="code" class="block mt-1 w-full"
                            type="password"
                            name="code" />

            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('You can also use your 2 factor authentication recovery codes.') }}
    </div>

    <form method="POST" action="{{ route('two-factor.login') }}">
        @csrf
        <div>
            <x-input-label for="recovery_code" :value="__('Recovery code')" />

            <x-text-input id="recovery_code" class="block mt-1 w-full"
                          type="password"
                          name="recovery_code" />

            <x-input-error :messages="$errors->get('recovery_code')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Submit') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
