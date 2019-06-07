<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
      'id_comanda', 'id_mesa', 'id_produto', 'valor_total',
      'id_forma_pagamento'
    ];



    public function produto(){

        return $this->hasOne('App\Models\Produto', 'id', 'produto_id');

    }


}
