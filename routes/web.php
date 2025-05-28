<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\EixoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

//Rotas dos controllers
Route::resource('niveis', NivelController::class);
Route::resource('eixos', EixoController::class);
Route::resource('alunos', AlunoController::class);
Route::resource('cursos', CursoController::class);
Route::resource('turmas', TurmaController::class);
Route::resource('documentos', DocumentoController::class);
Route::resource('categorias', CategoriaController::class);

// autenticação user para encaminhamento do dashboard   
Route::get('/dashboard', function () {
      $user = Auth::user();
    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === 'aluno') {
        return view('dashboard');  // View generica do aluno
    }
    abort(403);
})->middleware(['auth', 'verified'])->name('dashboard');    

Route::get('/teste-view', function () {
    return view('alunos.dashboard');
});

Route::middleware(['auth', Role::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
});
Route::middleware(['auth', Role::class . ':aluno'])->group(function () {
    Route::get('/alunos/dashboard', [AlunoController::class, 'dashboard'])
        ->name('alunos.dashboard');
});

//rotas breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
