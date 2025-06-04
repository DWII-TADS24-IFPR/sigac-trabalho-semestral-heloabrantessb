<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-light">
            {{ __('Validar Documento') }}
        </h2>
    </x-slot>

    <div class="container py-5">

        <h4>Informações do Documento</h4>
        <p><strong>Usuário:</strong> {{ $documento->user->name }}</p>
        <p><strong>Categoria:</strong> {{ $documento->categorias->nome }}</p>
        <p><strong>Horas informadas:</strong> {{ $documento->horas_in }}</p>
        <p><strong>Status atual:</strong> {{ ucfirst($documento->status) }}</p>
        <p><strong>Comentário:</strong> {{ $documento->comentario ?? 'Nenhum' }}</p>

        <p><strong>Arquivo enviado:</strong> 
            <a href="{{ asset('storage/' . $documento->url) }}" target="_blank" class="btn btn-link">Visualizar Documento</a>
        </p>

        <hr>

        <form action="{{ route('documentos.validar', $documento->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select name="status" class="form-select">
                    <option value="aprovado" {{ $documento->status == 'aprovado' ? 'selected' : '' }}>Aprovar</option>
                    <option value="rejeitado" {{ $documento->status == 'rejeitado' ? 'selected' : '' }}>Rejeitar</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="horas_out" class="form-label">Horas validadas:</label>
                <input type="number" name="horas_out" class="form-control" value="{{ $documento->horas_out ?? $documento->horas_in }}" min="0" step="0.1">
            </div>

            <button type="submit" class="btn btn-success">Validar</button>
        </form>

        <a href="{{ route('documentos.index') }}" class="btn btn-secondary mt-3">Voltar</a>

    </div>
</x-app-layout>
