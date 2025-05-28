<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="text-light p-4 rounded">
        @csrf

        <!-- Name -->
        <div class="input-group mb-3">
            <x-input-label for="nome" :value="__('Nome')" class="form-label text-light" />
            <x-text-input id="nome" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0" type="text" nome="nome" :value="old('nome')" required
                autofocus autocomplete="nome" />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        {{-- CPF --}}
        <div class="input-group mb-3">
            <x-input-label for="cpf" :value="__('CPF')" class="form-label text-light"/>
            <x-text-input id="cpf" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0" type="text" cpf="cpf" :value="old('cpf')" required
                autofocus autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        {{-- Telefone --}}
        <div class="input-group mb-3">
            <x-input-label for="telefone" :value="__('Telefone')" class="form-label text-light"/>
            <x-text-input id="telefone" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0 type=" type="text" telefone="telefone" :value="old('telefone')" required
                autofocus autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="input-group mb-3">
            <x-input-label for="email" :value="__('Email')" class="form-label text-light" />
            <x-text-input id="email" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0 type=" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <x-input-label for="password" :value="__('Senha')" class="form-label text-light"/>

            <x-text-input id="password" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0 type=" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" class="form-label text-light"/>

            <x-text-input id="password_confirmation" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-check mb-3">
            <a class="text-decoration-underline text-muted small rounded transition" href="{{ route('login') }}">
                {{ __('Já está cadastrado?') }}
            </a>

            <x-primary-button class="ms-4 btn btn-outline-success">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
