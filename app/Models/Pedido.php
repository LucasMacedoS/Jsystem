<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
      'ID_COMANDA', 'ID_MESA', 'ID_PRODUTO', 'VALOR_TOTAL',
      'ID_FORMA_PAGAMENTO'
    ]
}
