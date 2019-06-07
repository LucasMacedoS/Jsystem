<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
      'comanda_id', 'tipo_pagamento', 'total_venda',
    ];
}
