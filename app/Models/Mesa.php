<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = [
      'ID_MESA', 'ID_CLIENTE', 'STATUS'
    ]
}
