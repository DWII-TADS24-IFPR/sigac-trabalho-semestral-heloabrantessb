<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-light">
            {{ __('Enviar Documento') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <form action="{{ route('documentos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="url" class="form-label">Insira o documento comprovante:</label>
                <input type="file" name="url" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="horas_in" class="form-label">Horas Informadas</label>
                <input type="number" step="0.1" name="horas_in" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">Comentário (Opcional)</label>
                <textarea name="comentario" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoria</label>
                <select name="categoria_id" class="form-select" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>

            <input class="btn btn-primary mt-2" type="submit" value="Criar">
        </form>
    </div>
</x-app-layout>
