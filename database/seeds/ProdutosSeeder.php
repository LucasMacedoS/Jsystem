<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
            'nome' => 'Skol 1L',
            'categoria_id' => '2',
            'grupo_id' => '1',
            'manipulado' => 0,
            'estoque' => '100',
            'valor_unitario' => '11.50'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Pizza - Mussarela',
            'categoria_id' => '1',
            'grupo_id' => '3',
            'manipulado' => 1,
            'estoque' => '7',
            'valor_unitario' => '22.99'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Feijoada',
            'categoria_id' => '4',
            'grupo_id' => '2',
            'manipulado' => 1,
            'estoque' => '15',
            'valor_unitario' => '17.00'
        ]);
        DB::table('produtos')->insert([
            'nome' => 'Coca-Cola 600ml',
            'categoria_id' => '3',
            'grupo_id' => '1',
            'manipulado' => 0,
            'estoque' => '252',
            'valor_unitario' => '6.50'
        ]);
    }
}
