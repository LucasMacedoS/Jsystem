<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Categoria extends Model
{



    public function grupo(){

        return $this->hasOne('App\Models\Grupo', 'id', 'grupo_id');
    }
}