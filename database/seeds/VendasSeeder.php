<?php

use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('vendas')->insert([
            'comanda_id' => '1',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);
        DB::table('vendas')->insert([
            'comanda_id' => '2',
            'tipo_pagamento' => 'Debito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '3',
            'tipo_pagamento' => 'Debito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '4',
            'tipo_pagamento' => 'Debito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '5',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '5',
            'tipo_pagamento' => 'Debito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '6',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '7',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '8',
            'tipo_pagamento' => 'Credito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '9',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '10',
            'tipo_pagamento' => 'Credito',
            'total_venda' => '0'
        ]);

        DB::table('vendas')->insert([
            'comanda_id' => '11',
            'tipo_pagamento' => 'Dinheiro',
            'total_venda' => '0'
        ]);
    }
}
