<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;
use App\Models\Curso;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index')->with('categorias', $categorias);
    }

    public function create()
    {
        $cursos = Curso::all();

        return view('categorias.create', compact('cursos'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string',
            'maximo_horas' => 'required|integer',
            'curso_id' => 'required|exists:cursos,id'
        ]);

        Categoria::create([
            'nome' => $validated['nome'],
            'maximo_horas' => $validated['maximo_horas'],
            'curso_id' => $validated['curso_id']
        ]);

        return redirect()->route('categorias.index')->with('success', 'Categoria Criada Com Sucesso!');
    }
    public function show(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.show')->with('categoria', $categoria);
    }
    
    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit')->with('categoria', $categoria);
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);

         $validated = $request->validate([
            'nome' => 'required|string',
            'maximo_horas' => 'required|integer',
            'curso_id' => 'required|exists:cursos,id'
        ]);

        $categoria->nome = $validated['nome'];
        $categoria->maximo_horas = $validated['maximo_horas'];

        $categoria->save();

        return redirect()->route('categorias.index');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);

        $categoria->delete();

        return redirect()->route('categorias.index');
    }
}