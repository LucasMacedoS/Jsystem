<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $fillable = [
      'ID_COMANDA', 'ID_CLIENTE', 'STATUS',
    ];
}
