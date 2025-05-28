<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 text-light">
            {{ __('Aluno - Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="container">
            <div class="card bg-secondary text-white shadow-sm">
                <div class="card-body">
                    {{ __("Você está logado em uma conta de aluno!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
