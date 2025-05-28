@extends('layouts.footer')

<div class="m-4">
    <h1>SIGAC - Criar Curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST" class="form-group">
        @csrf
        <div>
            <label for="nome" class="form-label">Nome do curso:</label>
            <input class="form-control p-3" id="nome" type="text" placeholder="Nome"
                aria-label="default input example" name="nome">
        </div>
        <div>
            <label for="sigla" class="form-label">Sigla:</label>
            <input class="form-control p-3" id="sigla" type="text"
                aria-label="default input example" name="sigla">
        </div>
        <div>
            <label for="total_horas" class="form-label">Total de horas:</label>
            <input class="form-control p-3" id="total_horas" type="number" placeholder="Insira o total de horas do curso"
                aria-label="default input example" name="total_horas">
        </div>
        <div>
            <label for="nivel_id" class="form-label">Nivel:</label>
            <select name="nivel_id" id="nivel_id" class="form-select" required>
                <option value="">Selecione um nivel</option>
                @foreach ($niveis as $nivel)
                    <option value="{{ $nivel->id }}" {{ old('nivel_id') == $nivel->id ? 'selected' : '' }}>
                        {{ $nivel->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="eixo_id" class="form-label">Eixo:</label>
            <select name="eixo_id" id="eixo_id" class="form-select" required>
                <option value="">Selecione um eixo</option>
                @foreach ($eixos as $eixo)
                    <option value="{{ $eixo->id }}" {{ old('eixo_id') == $eixo->id ? 'selected' : '' }}>
                        {{ $eixo->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <input class="btn btn-primary mt-2" type="submit" value="Cadastrar Eixo">
    </form>
</div>
