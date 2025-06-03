@extends('layouts.footer')

@section('title', 'SIGAC - Documentos')

<div class="m-4">
    <h1>Documentos</h1>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">SIGLA</th>
                <th scope="col">HORAS TOTAIS</th>
                <th scope="col">NIVEL</th>
                <th scope="col">EIXO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documentos as $documento)
                <tr>
                    <td>{{ $documento->id }}</td>
                    <td>{{ $documento->url }}</td>
                    <td>{{ $documento->horas_in }}</td>
                    <td>{{ $documento->comentario }}</td>
                    <td>{{ $documento->horas_out}}</td>
                    <td>{{ $documento->categoria->nome ?? 'Sem categoria'}}</td>
                    <td><a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
</div>
