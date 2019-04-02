<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(GruposSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosSeeder::class);
    }
}
