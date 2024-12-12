<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipos_usuarios = ['Administrador', 'Usuario'];

        foreach($tipos_usuarios as $tp){
            DB::table('tipo_usuarios')->insert([
                'nombre' => $tp,
                'estado' => 1,
            ]);
        }
    }
}
