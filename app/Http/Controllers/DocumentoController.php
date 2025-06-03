<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function index()
    {
        $documentos = Documento::all();

        return view('documentos.index')->with('documentos', $documentos); //View
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('documentos.create', compact('categorias'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'url' => 'required|file|max:2048',
        'horas_in' => 'required|numeric',
        'comentario' => 'nullable|string|max:255',
        'categoria_id' => 'required|exists:categorias,id',
    ]);

    $path = $request->file('url')->store('documentos', 'public');

    Documento::create([
        'url' => $path,
        'horas_in' => $validated['horas_in'],
        'status' => 'pendente',
        'comentario' => $validated['comentario'] ?? null,
        'horas_out' => 0,
        'categoria_id' => $validated['categoria_id'],
        'user_id' => Auth::id(),
    ]);

    return redirect()->route("documentos.index")->with('success', 'Documento criado com sucesso!');
}
    public function show(string $id)
    {
        $documento = Documento::findOrFail($id);

        return view('documentos.show')->with('documento', $documento);
    }

    public function edit(string $id)
    {
        $documento = Documento::findOrFail($id);

        return view('documentos.edit')->with('documentos', $documento);
    }

    public function update(Request $request, string $id)
    {
        $documento = Documento::findOrFail($id);

        $validated = $request->validate([
            'url' => 'required|string',
            'horas_in' => 'required|double',
            'status' => 'required|string',
            'comentario' => 'string',
            'horas_out' => 'required|double'
        ]);

        $documento->url = $validated['url'];
        $documento->horas_in = $validated['horas_in'];
        $documento->status = $validated['status'];
        $documento->comentario = $validated['comentario'];
        $documento->horas_out = $validated['horas_out'];

        $documento->save();

        return redirect()->route('documentos.index');
    }

    public function destroy(string $id)
    {
        $documento = Documento::findOrFail($id);

        $documento->delete();

        return redirect()->route('niveis.index');
    }
}
