<?php

use Illuminate\Database\Seeder;

class Tipo_pagamentoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_pagamento')->insert([
            'tipo_pagamento' => 'Debito'
        ]);
        DB::table('tipo_pagamento')->insert([
            'tipo_pagamento' => 'Credito'
        ]);
        DB::table('tipo_pagamento')->insert([
            'tipo_pagamento' => 'Dinheiro'
        ]);
    }
}
