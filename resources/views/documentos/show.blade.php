@extends('layouts.footer')

@section('title', 'SIGAC - Documento')

<div class="m-4">
    <h1>Documento</h1>

    <table class="table table-white">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $documento->id }}</td>
            </tr>
            <tr>
                <th scope="row">URL</th>
                <td><a href="{{ asset('storage/' . $documento->url) }}" target="_blank">Visualizar Documento</a></td>
            </tr>
            <tr>
                <th scope="row">Horas Solicitadas</th>
                <td>{{ $documento->horas_in }}</td>
            </tr>
            <tr>
                <th scope="row">Horas Validadas</th>
                <td>{{ $documento->horas_out }}</td>
            </tr>
            <tr>
                <th scope="row">Status</th>
                <td>{{ $documento->status }}</td>
            </tr>
            <tr>
                <th scope="row">Comentário</th>
                <td>{{ $documento->comentario ?? 'Nenhum' }}</td>
            </tr>
            <tr>
                <th scope="row">Categoria</th>
                <td>{{ $documento->categoria->nome }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Voltar</a>
</div>
