@extends('layouts.footer')

@section('title', 'SIGAC - Eixps')

<div class="m-4">
    <h1>Eixos</h1>

    <button class="btn btn-primary" onclick="window.location.href='{{ route('eixos.create') }}'"> Adicionar
        Eixo</button>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eixos as $eixo)
                <tr>
                    <td>{{ $eixo->id }}</td>
                    <td>{{ $eixo->nome }}</td>
                    <td><a href="{{ route('eixos.show', $eixo->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
