@extends('layouts.footer')
<!-- Simplicity is the ultimate sophistication.  Leonardo da Vinci -->
<div>
    <h1>SIGAC - Visualizar Turma</h1>

    <div>
        <p>ID: {{ $turma->id }}</p>
        <p>Nome: {{ $turma->ano }}</p>
    </div>

    <a href="{{ route('niveis.edit', $turma->id) }}" class="btn btn-success">Editar</a>

    <form action="{{ route('niveis.destroy', $turma->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>
