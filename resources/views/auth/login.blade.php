<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="input-group">
            <x-input-label for="email" :value="__('Email')" class="form-label" />
            <x-text-input id="email" class="d-block mt-1 w-100 form-control" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 input-group">
            <x-input-label for="password" :value="__('Password')" class="form-label" />

            <x-text-input id="password" class="d-block mt-1 w-100 form-control" type="password" name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="d-block mt-4">
            <label for="remember_me" class="d-inline-flex align-items-center">
                <input id="remember_me" type="checkbox" class="rounded border border-secondary text-primary shadow-sm"
                    name="remember">
                <span class="ms-2 fs-6 text-secondary">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="d-flex align-items-center justify-content-end mt-4">
            @if (Route::has('password.request'))
                <a class="text-decoration-underline small text-secondary rounded link-dark"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 btn btn-succes">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
