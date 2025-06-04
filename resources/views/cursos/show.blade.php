@extends('layouts.footer')
<div class="m-4">
    <h1>SIGAC - Visualizar Curso</h1>

    <div>
        <p class="border w-25"><strong>ID:</strong> {{ $curso->id }}</p>
        <p class="border w-25"><strong>Nome:</strong> {{ $curso->nome }}</p>
        <p class="border w-25"><strong>CPF: </strong>{{ $curso->sigla }}</p>
        <p class="border w-25"><strong>Telefone:</strong> {{ $curso->total_horas }}</p>
        <p class="border w-25"><strong>Email:</strong> {{ $curso->nivel->nome ?? 'Sem Nivel'}}</p>
        <p class="border w-25"><strong>Curso:</strong> {{ $curso->eixo->nome ?? 'Sem Eixo' }}</p>
    </div>

    <div class="d-flex gap-2">
        <a href="{{ route('niveis.edit', $curso->id) }}" class="btn btn-success h-0">Editar</a>

        <form action="{{ route('niveis.destroy', $curso->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <a type="submit" class="btn btn-danger">Excluir</a>
        </form>
        <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
    </div>
</div>
