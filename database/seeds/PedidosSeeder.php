<?php

use Illuminate\Database\Seeder;

class PedidosSeeder extends Seeder
{
    public function run()
    {
        DB::table('pedidos')->insert([
            'comanda_id' => '2'
        ]);
        DB::table('pedidos')->insert([
            'comanda_id' => '3'
        ]);
    }
}
