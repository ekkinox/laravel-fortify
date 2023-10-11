<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Two Factor Authentication') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Manage your two factor authentication settings.') }}
        </p>
    </header>

    @if (auth()->user()->two_factor_secret)
        @if (auth()->user()->two_factor_confirmed_at)
            <div class="mb-4 font-medium text-sm">
                Recovery codes:<br/>
                @foreach (auth()->user()->recoveryCodes() as $code)
                    {{ $code }} <br/>
                @endforeach
            </div>
            <form method="post" action="{{ route('two-factor.recovery-codes') }}" class="mt-6 space-y-6">
                @csrf
                @method('post')
                <x-primary-button>{{ __('Regenerate codes') }}</x-primary-button>
            </form>
            <form method="post" action="{{ route('two-factor.enable') }}" class="mt-6 space-y-6">
                @csrf
                @method('delete')
                <x-danger-button>{{ __('Disable') }}</x-danger-button>
            </form>
        @else
            @if (session('status') == 'two-factor-authentication-confirmed')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600"
                >{{ __('2 factor authentication confirmation success.') }}</p>
                <form method="post" action="{{ route('two-factor.enable') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('delete')
                    <x-danger-button>{{ __('Disable') }}</x-danger-button>
                </form>
            @else
                <div class="mb-4 font-medium text-sm">
                    Please finish configuring your two factor authentication below.
                </div>
                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                <form method="post" action="{{ route('two-factor.confirm') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('post')
                    <x-input-label for="code" value="{{ __('Code') }}" class="sr-only" />
                    <x-text-input
                        id="code"
                        name="code"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('Code') }}"
                    />
                    <x-primary-button>{{ __('Confirm') }}</x-primary-button>
                </form>
                <form method="post" action="{{ route('two-factor.enable') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('delete')
                    <x-danger-button>{{ __('Cancel') }}</x-danger-button>
                </form>
            @endif
        @endif
    @else
        <form method="post" action="{{ route('two-factor.enable') }}" class="mt-6 space-y-6">
            @csrf
            @method('post')
            <x-primary-button>{{ __('Enable') }}</x-primary-button>
        </form>
    @endif

</section>
