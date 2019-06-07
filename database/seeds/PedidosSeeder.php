<?php

use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            'comanda_id' => '1',
            'produto_id' => '2',
            'quantidade' => '1'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '2',
            'produto_id' => '1',
            'quantidade' => '2'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '4',
            'produto_id' => '4',
            'quantidade' => '1'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '4',
            'produto_id' => '3',
            'quantidade' => '2'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '4',
            'produto_id' => '1',
            'quantidade' => '3'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '6',
            'produto_id' => '4',
            'quantidade' => '1'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '7',
            'produto_id' => '2',
            'quantidade' => '5'
        ]);

        DB::table('pedidos')->insert([
            'comanda_id' => '8',
            'produto_id' => '1',
            'quantidade' => '2'
        ]);
    }
}
