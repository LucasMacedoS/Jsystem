<?php

use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('vendas')->insert([
            'pedido_id' => '1',
            'tipo_pagamento' => '1',
            'total_venda' => '0'
        ]);
        DB::table('vendas')->insert([
            'pedido_id' => '2',
            'tipo_pagamento' => '3',
            'total_venda' => '0'
        ]);
    }
}
