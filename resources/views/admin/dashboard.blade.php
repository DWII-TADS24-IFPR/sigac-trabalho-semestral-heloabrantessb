<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Admin - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-4 text-dark">
                    {{ __("Você está logado em uma conta de administrador!") }}
                </div>
            </div>
            <div class="d-flex row row-cols-2">
                <div class="border p-4 w-50 col">
                    <p>Alunos</p>
                    <button class="btn btn-primary">Gerenciar Alunos</button>
                </div>
                <div class="border p-4 w-50 col">
                    <p>Cursos</p>
                    <button class="btn btn-primary">Gerenciar Cursos</button>
                </div>
                <div class="border p-4 w-50 col">
                    <p>Turmas</p>
                    <button class="btn btn-primary">Gerenciar Turmas</button>
                </div>
                <div class="border p-4 w-50 col">
                    <p>Eixos</p>
                    <button class="btn btn-primary">Gerenciar Eixos</button>
                </div>
                <div class="border p-4 w-50 col">
                    <p>Niveis de Ensino</p>
                    <button class="btn btn-primary">Gerenciar Niveis de Ensino</button>
                </div>
                   <div class="border p-4 w-50 col">
                    <p>Categorias de documentos</p>
                    <button class="btn btn-primary">Gerenciar Categorias de Documentos</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
