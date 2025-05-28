@extends('layouts.footer')

@section('title', 'SIGAC - Alunos')

<div class="m-4">
    <h1>Categoria de documentos</h1>

    <button class="btn btn-primary" onclick="window.location.href='{{ route('categorias.create') }}'"> Adicionar
        Categoria</button>

    <table class="table table-white">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">MAXIMO DE HORAS</th>
                <th scope="col">CURSO</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id }}</td>
                    <td>{{$categoria->nome }}</td>
                    <td>{{$categoria->maximo_horas }}</td>
                    <td>{{$categoria->curso->nome}}</td>
                    <td><a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-success">Visualizar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a  class="btn btn-secondary"  href="{{ route('dashboard')}}">Voltar ao dashboard</a>
</div>
