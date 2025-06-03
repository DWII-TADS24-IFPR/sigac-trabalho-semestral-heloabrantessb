<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Eixo;
use App\Models\Nivel;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'
            ],
            [
                'name' => 'Jorge',
                'email' => 'jorge@email.com',
                'password' => Hash::make('jorge123'),
                'role' => 'aluno'
            ]
        ]);

        Nivel::insert([
            'nome' => 'Tecnólogo'
        ]);

        Eixo::insert([
            'nome' => 'Tecnológico'
        ]);

        Curso::insert([
            'nome' => 'Análise e Desenvolvimento de Sistemas',
            'sigla' => 'TADS',
            'total_horas' => 2150,
            'nivel_id' => 1,
            'eixo_id' => 1,
        ]);

        Categoria::insert([
            'nome' => 'Palestra - Ouvinte',
            'maximo_horas' => '30',
            'curso_id' => 1
        ]);
    }
}
