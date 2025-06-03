<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-light">
            {{ __('Aluno - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="bg-dark-subtle overflow-hidden shadow-sm rounded text-light">
                <div class="p-4">
                    {{ __('Você está logado em uma conta de Aluno!') }}
                </div>  
            </div>

            <div class="d-flex row row-cols-2 mt-4">
                <div class="border p-4 w-50 col rounded">
                    <p>Validação de Horas Complementares</p>
                    <a class="btn btn-primary" href="{{ Route('documentos.create') }}">Validar Horas</a>
                </div>
            </div>
        </div>
</x-app-layout>
