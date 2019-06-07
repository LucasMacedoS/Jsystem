<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Admin',
            'email' => 'admin@jsystem.com',
            'password' => '123456',
            'perfil' => 'admin',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Joao',
            'email' => 'joao@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '0'
        ]);
        DB::table('users')->insert([
            'nome' => 'Maria',
            'email' => 'maria@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Joaquim',
            'email' => 'joaquim@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '0'
        ]);

        DB::table('users')->insert([
            'nome' => 'Adamastor',
            'email' => 'adamastor@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Clara',
            'email' => 'clara@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Pedro',
            'email' => 'pedro@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Guilherme',
            'email' => 'guilherme@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Andre',
            'email' => 'andre@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);

        DB::table('users')->insert([
            'nome' => 'Carlos',
            'email' => 'carlos@jsystem.com',
            'password' => '123456',
            'perfil' => 'usuario',
            'status' => '1'
        ]);
    }
}
