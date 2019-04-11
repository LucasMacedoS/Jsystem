<?php

use Illuminate\Database\Seeder;

class ComandasSeeder extends Seeder
{
    public function run()
    {
        DB::table('comandas')->insert([
            'status' => 'INATIVO'
        ]);
        DB::table('comandas')->insert([
            'status' => 'ATIVO'
        ]);
        DB::table('comandas')->insert([
            'status' => 'ATIVO'
        ]);
    }
}
