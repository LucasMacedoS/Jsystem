<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
      'nome', 'categoria', 'grupo', 'manipulado', 'estoque',
      'valor_unitario'
    ];
}
