<x-guest-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}" class="text-light p-4 rounded">
        @csrf

        <!-- Name -->
        <div class="input-group mb-3">
            <x-input-label for="name" :value="__('Nome:')" class="form-label text-light" />
            <x-text-input id="name" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- CPF --}}
        <div class="input-group mb-3">
            <x-input-label for="cpf" :value="__('CPF')" class="form-label text-light" />
            <x-text-input id="cpf" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="cpf" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        {{-- Telefone --}}
        <div class="input-group mb-3">
            <x-input-label for="telefone" :value="__('Telefone')" class="form-label text-light" />
            <x-text-input id="telefone" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="text" name="telefone" :value="old('telefone')" required autofocus autocomplete="telefone" />
            <x-input-error :messages="$errors->get('telefone')" class="mt-2" />
        </div>

        <!-- Curso -->
        <div class="input-group mb-3">
            <x-input-label for="curso_id" :value="__('Curso')" class="form-label text-light" />
            <select id="curso_id" name="curso_id"
                class="d-block mt-1 w-100 form-select bg-secondary text-light border-0" required>
                <option value="">Selecione o curso</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('curso_id')" class="mt-2" />
        </div>

        <!-- Turma -->
        <div class="input-group mb-3">
            <x-input-label for="turma_id" :value="__('Turma')" class="form-label text-light" />
            <select id="turma_id" name="turma_id"
                class="d-block mt-1 w-100 form-select bg-secondary text-light border-0" required>
                <option value="">Selecione a turma</option>
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}" {{ old('turma_id') == $turma->id ? 'selected' : '' }}>
                        {{ $turma->ano }}
                    </option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('turma_id')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="input-group mb-3">
            <x-input-label for="email" :value="__('Email')" class="form-label text-light" />
            <x-text-input id="email" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="input-group mb-3">
            <x-input-label for="password" :value="__('Senha')" class="form-label text-light" />

            <x-text-input id="password" class="d-block mt-1 w-100 form-control bg-secondary text-light border-0"
                type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="input-group mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirmar senha')" class="form-label text-light" />

            <x-text-input id="password_confirmation"
                class="d-block mt-1 w-100 form-control bg-secondary text-light border-0" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-check mb-3">
            <a class="text-decoration-underline text-muted small rounded transition" href="{{ route('login') }}">
                {{ __('Já está cadastrado?') }}
            </a>

            <x-primary-button class="ms-4 btn btn-outline-success" type="submit">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
