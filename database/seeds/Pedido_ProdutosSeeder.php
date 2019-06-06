<?php

use Illuminate\Database\Seeder;

class Pedido_ProdutosSeeder extends Seeder
{

    public function run()
    {
        DB::table('produto_pedido')->insert([
            'pedido_id' => '1',
            'produto_id' => '3'
        ]);
        DB::table('produto_pedido')->insert([
            'pedido_id' => '1',
            'produto_id' => '4'
        ]);
        DB::table('produto_pedido')->insert([
            'pedido_id' => '2',
            'produto_id' => '1'
        ]);
        DB::table('produto_pedido')->insert([
            'pedido_id' => '2',
            'produto_id' => '2'
        ]);
    }
}
