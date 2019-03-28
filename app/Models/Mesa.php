<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
      'id_mesa', 'id_cliente', 'status'
    ];
}
