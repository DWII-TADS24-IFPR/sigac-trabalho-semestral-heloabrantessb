<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Aluno - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="bg-white overflow-hidden shadow-sm rounded">
                <div class="p-4 text-dark">
                    {{ __('Você está logado em uma conta de Aluno!') }}
                </div>  
            </div>

            <div class="d-flex row row-cols-2 mt-4">
                <div class="border border-light p-4 w-50 col">
                    <p>Validação de Horas Complementares</p>
                    <a class="btn btn-primary" href="{{ Route('documentos.create') }}">Validar Horas</a>
                </div>
            </div>
        </div>
</x-app-layout>
