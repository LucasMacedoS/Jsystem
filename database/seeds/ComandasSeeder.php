<?php

use Illuminate\Database\Seeder;

class ComandasSeeder extends Seeder
{
    public function run()
    {
        //1- ativo / 0 - inativo
        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '2'
        ]);
        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);
        DB::table('comandas')->insert([
            'status' => '0',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '1'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '0',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '0',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '0',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);

        DB::table('comandas')->insert([
            'status' => '1',
            'desconto' => '0'
        ]);
    }
}
