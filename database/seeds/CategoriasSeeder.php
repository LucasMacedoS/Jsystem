<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Pizza',
            'grupo_id' => '3'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Alcoolicos',
            'grupo_id' => '1'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Refrigerantes',
            'grupo_id' => '1'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Refeições',
            'grupo_id' => '2'
        ]);
    }
}
