<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $table = 'PRODUTOS';

    protected $fillable = [
      'NOME', 'CATEGORIA', 'GRUPO', 'MANIPULADO', 'ESTOQUE',
      'VALOR_UNITARIO'
    ];
}
