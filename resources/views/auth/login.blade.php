<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="text-light p-4 rounded">
        @csrf

        <!-- Email Address -->
        <div class="input-group mb-3">
            <x-input-label for="email" :value="__('Email')" class="form-label text-light" />
            <x-text-input id="email" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <x-input-label for="password" :value="__('Password')" class="form-label text-light" />
            <x-text-input id="password" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        </div>

        <!-- Remember Me -->
        <div class="form-check mb-3">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label text-light">
                {{ __('Remember me') }}
            </label>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            @if (Route::has('password.request'))
                <a class="text-decoration-underline text-secondary" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="btn btn-outline-success">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
