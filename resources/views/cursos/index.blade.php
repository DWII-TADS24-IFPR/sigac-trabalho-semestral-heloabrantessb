@extends('layouts.footer')

@section('title', 'SIGAC - Alunos')

<div class="m-4">
    <h1>Cursos</h1>

    <button class="btn btn-primary" onclick="window.location.href='{{ route('cursos.create') }}'"> Adicionar
        Cursos</button>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">SIGLA</th>
                <th scope="col">HORAS TOTAIS</th>
                <th scope="col">NIVEL</th>
                <th scope="col">EIXO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->nome }}</td>
                    <td>{{ $curso->sigla }}</td>
                    <td>{{ $curso->total_horas }}</td>
                    <td>{{ $curso->nivel->nome }}</td>
                    <td>{{ $curso->eixo->nome }}</td>
                    <td><a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
