<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
@extends('layouts.footer')

@section('title', 'SIGAC - Turmas')

<div class="m-4">
    <h1>Turmas</h1>

    <button class="btn btn-primary" onclick="window.location.href='{{ route('turmas.create') }}'"> Adicionar
        Turma</button>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">CURSO</th>
                <th scope="col">ANO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($turmas as $turma)
                <tr>
                    <td>{{ $turma->id }}</td>
                    <td>{{ $turma->curso->nome }}</td>
                    <td>{{ $turma->ano }}</td>
                    <td><a href="{{ route('turmas.show', $turma->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
</div>
