@extends('layouts.footer')


<div class="m-4">
    <h1>SIGAC - Criar Eixo</h1>

    <form action="{{ route('eixos.store') }}" method="POST">
        @csrf
        <label for="nome" class="form-label">Insira um eixo</label>
        <input class="form-control p-3" id="nome" type="text" placeholder="Insira um eixo" aria-label="default input example" name="nome">

        <input class="btn btn-primary mt-2" type="submit" value="Criar">
    </form>
</div>
