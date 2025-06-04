<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;

class AlunoController extends Controller
{
    public function dashboard()
    {
        return view('alunos.dashboard');
    }

    public function index() 
    {
        $alunos = Aluno::all();

        return view('alunos.index')->with('alunos', $alunos);
    }

    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        
        return view('alunos.create', compact('cursos','turmas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cpf' => ['required', 'string', 'max:14'],
            'telefone' => ['nullable', 'string', 'max:15'],
            'curso_id' => ['required', 'exists:cursos,id'],
            'turma_id' => ['required', 'exists:turmas,id'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Aluno::create([
            'nome' => $request->name,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'user_id' => $user->id,
            'curso_id' => $request->curso_id,
            'turma_id' => $request->turma_id,
        ]);

        event(new Registered($user));

        return redirect()->route('alunos.index')->with('success', 'Aluno criado com sucesso!');
    }

    public function show(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.show')->with('aluno', $aluno);
    }

    public function edit(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        return view('alunos.edit')->with('aluno', $aluno);
    }

    public function update(Request $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|max:14',
            'email' => 'required|max:255|email',
            'telefone' => 'max:15',
            'senha' => 'required|string|min:8',
        ]);


        $aluno->nome = $validated['nome'];
        $aluno->cpf = $validated['cpf'];
        $aluno->email = $validated['email'];
        $aluno->telefone = $validated['telefone'];

        $aluno->save();

        return redirect()->route('alunos.index')->with('success', 'Aluno atualizado com sucesso!');
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        return redirect()->route('alunos.index');
    }
}
