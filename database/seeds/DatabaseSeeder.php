<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(GruposSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(ComandasSeeder::class);
        $this->call(PedidosSeeder::class);
        $this->call(Pedido_ProdutosSeeder::class);
    }
}
