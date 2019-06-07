<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = [
        'nome', 'categoria_id', 'grupo_id', 'manipulado', 'estoque',
        'valor_unitario'
    ];


    public function grupo(){

        return $this->hasOne('App\Models\Grupo', 'id', 'grupo_id');

    }

    public function categoria(){

        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
}
