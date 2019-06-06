<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = [
      'id_comanda', 'id_cliente', 'status',
    ];
}
