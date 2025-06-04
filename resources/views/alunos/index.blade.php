@extends('layouts.footer')

@section('title', 'SIGAC - Alunos')

<div class="m-4">
    <h1>Alunos</h1>

    <button class="btn btn-primary" onclick="window.location.href='{{ route('alunos.create') }}'"> Adicionar
        Aluno</button>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">CPF</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">CURSO</th>
                <th scope="col">TURMA</th>
                <th scope="col">AÇÃO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->id }}</td>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->cpf }}</td>
                    <td>{{ $aluno->telefone }}</td>
                    <td>{{ $aluno->curso->nome ?? 'Sem curso' }} </td>
                    <td>{{ $aluno->turma->ano ?? 'Sem turma'}}</td>
                    <td><a href="{{ route('alunos.show', $aluno->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
</div>
