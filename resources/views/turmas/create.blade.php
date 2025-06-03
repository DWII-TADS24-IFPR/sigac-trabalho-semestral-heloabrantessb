@extends('layouts.footer')

<div class="m-4">
    <h1>SIGAC - Criar Turma</h1>

    <form action="{{ route('turmas.store') }}" method="POST" class="form-group">
        @csrf
        <div>
            <label for="curso_id" class="form-label">Curso:</label>
            <select name="curso_id" id="curso_id" class="form-select" required>
                <option value="">Selecione um curso</option>
                @foreach ($cursos as $curso)
                    <option value="{{ $curso->id }}" {{ old('curso_id') == $curso->id ? 'selected' : '' }}>
                        {{ $curso->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="ano" class="form-label">Ano:</label>
            <input class="form-control p-3" id="ano" type="number" placeholder="Ano"
                aria-label="default input example" name="ano">
        </div>
        <input class="btn btn-primary mt-2" type="submit" value="Cadastrar Turma">
        <a  class="btn btn-secondary"  href="{{ route('turmas.index')}}">Voltar</a>
    </form>
</div>
