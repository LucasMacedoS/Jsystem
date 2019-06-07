<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BalancoCaixa extends Model
{
    protected $table = 'balanco_caixas';

    protected $fillable = [
      'venda_id', 'tipo', 'valor',
    ];
}
