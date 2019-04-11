<?php

use Illuminate\Database\Seeder;

class GruposSeeder extends Seeder
{
    public function run()
    {
        DB::table('grupos')->insert([
            'nome' => 'Bebidas'
        ]);
        DB::table('grupos')->insert([
            'nome' => 'Refeições'
        ]);
        DB::table('grupos')->insert([
            'nome' => 'Salgados'
        ]);
    }
}
