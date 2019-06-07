<?php

use Illuminate\Database\Seeder;

class FuncionariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'nome' => 'Luiz Anthony de Paula',
          'email' => 'luizanthonydepaula-96@premierpet.com.br',
          'password' => 'u7CO2lXS'
      ]);
      DB::table('users')->insert([
          'nome' => 'Bento Bruno Benjamin Caldeira',
          'email' => 'bentobrunobenjamincaldeira_@gmx.com.br',
          'password' => '6YcCs4lL'
      ]);
      DB::table('users')->insert([
          'nome' => 'Sebastião Rafael Enzo Sales',
          'email' => 'ssebastiaorafaelenzosales@alway.com.br',
          'password' => '4YdUDf5h'
      ]);
      DB::table('users')->insert([
          'nome' => 'Julia Isabelle Cardoso',
          'email' => 'juliaisabellecardoso_@acmorgado.com.br',
          'password' => 'l8yUHdAq'
      ]);
      DB::table('users')->insert([
          'nome' => 'Ayla Catarina Lavínia Almeida',
          'email' => 'aaylacatarinalaviniaalmeida@metododerose.org',
          'password' => 'g2oRtsHG'
      ]);
      DB::table('users')->insert([
          'nome' => 'Letícia Fátima Dias',
          'email' => 'leticiafatimadias__leticiafatimadias@trustsign.com.br',
          'password' => '1qTg7iSW'
      ]);
      DB::table('users')->insert([
          'nome' => 'Sérgio Filipe da Silva',
          'email' => 'sergiofilipedasilva..sergiofilipedasilva@life.com',
          'password' => 'Kbb7QZaH'
      ]);
      DB::table('users')->insert([
          'nome' => 'Nicolas Yuri Costa',
          'email' => 'nicolasyuricosta-88@amplisat.com.br',
          'password' => 'KiMoKNAO'
      ]);

    }
}
