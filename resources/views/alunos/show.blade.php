@extends('layouts.footer')
<div class="m-4">
    <h1>SIGAC - Visualizar Turma</h1>

    <div>
        <p class="border w-25"><strong>ID:</strong> {{ $aluno->id }}</p>
        <p class="border w-25"><strong>Nome:</strong> {{ $aluno->nome }}</p>
        <p class="border w-25"><strong>CPF: </strong>{{ $aluno->cpf }}</p>
        <p class="border w-25"><strong>Telefone:</strong> {{ $aluno->telefone }}</p>
        <p class="border w-25"><strong>Email:</strong> {{ $aluno->user->email }}</p>
        <p class="border w-25"><strong>Curso:</strong> {{ $aluno->curso->nome ?? 'Sem curso' }}</p>
        <p class="border w-25"><strong>Turma: </strong>{{ $aluno->turma->nome ?? 'Sem Turma' }}</p>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('niveis.edit', $aluno->id) }}" class="btn btn-success h-0">Editar</a>

        <form action="{{ route('niveis.destroy', $aluno->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a type="submit" class="btn btn-danger">Excluir</a>
        </form>
        <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
    </div>
</div>
