@extends('layouts.footer')

<div class="container my-4">
    <h1 class="mb-4">SIGAC - Criar Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST" class="text-light p-4 rounded">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do aluno:</label>
            <input type="text" class="form-control shadow-sm rounded border-primary p-3" id="nome" name="nome" placeholder="Nome" aria-label="Nome">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control shadow-sm rounded border-primary p-3" id="cpf" name="cpf" placeholder="000.000.000-00" aria-label="CPF">
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" class="form-control shadow-sm rounded border-primary p-3" id="telefone" name="telefone" placeholder="(99) 99999-9999" aria-label="Telefone">
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Curso:</label>
            <select class="form-select shadow-sm rounded border-primary p-3" id="curso_id" name="curso_id" required>
                <option value="">Selecione um curso</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="turma_id" class="form-label">Turma:</label>
            <select class="form-select shadow-sm rounded border-primary p-3" id="turma_id" name="turma_id" required>
                <option value="">Selecione uma turma</option>
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}" {{ old('turma_id') == $turma->id ? 'selected' : '' }}>
                        {{ $turma->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control shadow-sm rounded border-primary p-3" id="email" name="email" placeholder="seuemail@example.com">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha:</label>
            <input type="password" class="form-control shadow-sm rounded border-primary p-3" id="password" name="password" placeholder="Digite sua senha">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Senha:</label>
            <input type="password" class="form-control shadow-sm rounded border-primary p-3" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Aluno</button>
    </form>
</div>
