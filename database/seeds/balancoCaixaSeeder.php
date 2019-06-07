<?php

use Illuminate\Database\Seeder;

class balancoCaixaSeeder extends Seeder
{

    public function run()
    {
        DB::table('balanco_caixas')->insert([
            'venda_id' => '1',
            'tipo' => 'Entrada',
            'valor' => '10.50'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '2',
            'tipo' => 'Entrada',
            'valor' => '5.99'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '3',
            'tipo' => 'Entrada',
            'valor' => '4.60'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '4',
            'tipo' => 'Entrada',
            'valor' => '3'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '5',
            'tipo' => 'Entrada',
            'valor' => '10.99'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '6',
            'tipo' => 'Entrada',
            'valor' => '7.10'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '7',
            'tipo' => 'Entrada',
            'valor' => '8'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '8',
            'tipo' => 'Entrada',
            'valor' => '10'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '9',
            'tipo' => 'Entrada',
            'valor' => '5'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '10',
            'tipo' => 'Entrada',
            'valor' => '3'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '11',
            'tipo' => 'Entrada',
            'valor' => '7.80'
        ]);

        DB::table('balanco_caixas')->insert([
            'venda_id' => '12',
            'tipo' => 'Entrada',
            'valor' => '6'
        ]);
    }
}
