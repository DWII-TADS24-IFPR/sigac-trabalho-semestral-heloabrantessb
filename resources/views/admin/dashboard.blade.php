<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-light">
            {{ __('Admin - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="bg-dark text-light overflow-hidden shadow-sm rounded">
                <div class="p-4">
                    {{ __("Você está logado em uma conta de administrador!") }}
                </div>
            </div>
            <div class="d-flex row row-cols-2 mt-4">
                <div class="border border-light p-4 w-50 col">
                    <p>Alunos</p>
                    <a class="btn btn-primary" href="{{ Route('alunos.index') }}">Gerenciar Alunos</a>
                </div>
                <div class="border border-light p-4 w-50 col">
                    <p>Cursos</p>
                    <a class="btn btn-primary" href="{{ Route('cursos.index') }}">Gerenciar Cursos</a>
                </div>
                <div class="border border-light p-4 w-50 col">
                    <p>Turmas</p>
                    <a class="btn btn-primary" href="{{ Route('turmas.index') }}">Gerenciar Turmas</a>
                </div>
                <div class="border border-light p-4 w-50 col">
                    <p>Eixos</p>
                    <a class="btn btn-primary" href="{{ Route('eixos.index') }}">Gerenciar Eixos</a>
                </div>
                <div class="border border-light p-4 w-50 col">
                    <p>Niveis de Ensino</p>
                    <a class="btn btn-primary" href="{{ Route('niveis.index') }}">Gerenciar Niveis de Ensino</a>
                </div>
                <div class="border border-light p-4 w-50 col">
                    <p>Categorias de documentos</p>
                    <a class="btn btn-primary" href="{{ Route('categorias.index') }}">Gerenciar Categorias de Documentos</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
