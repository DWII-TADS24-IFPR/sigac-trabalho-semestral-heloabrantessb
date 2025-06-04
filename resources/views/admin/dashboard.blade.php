@extends('layouts.footer')
<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-5 text-light bg-dark-subtle">
            {{ __('Admin - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="container">
            <div class="bg-dark-subtle text-light overflow-hidden shadow-sm rounded">
                <div class="p-4">
                    {{ __("Você está logado em uma conta de administrador!") }}
                </div>
            </div>
            {{-- <div class="d-flex row row-cols-2 mt-4 rounded">
                <p>Validar Horas</p>
                <a href="btn btn-secondary" href="{{ Route('documentos.validar') }}">Validar Horas</a>
            </div> --}}
            <div class="d-flex row row-cols-2 mt-4 rounded">
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Alunos</p>
                    <a class="btn btn-secondary" href="{{ Route('alunos.index') }}">Gerenciar Alunos</a>
                </div>
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Cursos</p>
                    <a class="btn btn-secondary" href="{{ Route('cursos.index') }}">Gerenciar Cursos</a>
                </div>
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Turmas</p>
                    <a class="btn btn-secondary" href="{{ Route('turmas.index') }}">Gerenciar Turmas</a>
                </div>
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Eixos</p>
                    <a class="btn btn-secondary" href="{{ Route('eixos.index') }}">Gerenciar Eixos</a>
                </div>
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Niveis de Ensino</p>
                    <a class="btn btn-secondary" href="{{ Route('niveis.index') }}">Gerenciar Niveis de Ensino</a>
                </div>
                <div class="border border p-4 w-50 col bg-dark-subtle">
                    <p>Categorias de documentos</p>
                    <a class="btn btn-secondary" href="{{ Route('categorias.index') }}">Gerenciar Categorias de Documentos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
