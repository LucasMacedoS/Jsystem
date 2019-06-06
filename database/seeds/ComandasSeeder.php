<?php

use Illuminate\Database\Seeder;

class ComandasSeeder extends Seeder
{
    public function run()
    {
        DB::table('comandas')->insert([
            'status' => 0
        ]);
        DB::table('comandas')->insert([
            'status' => 1
        ]);
        DB::table('comandas')->insert([
            'status' => 1
        ]);
    }
}
