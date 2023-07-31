<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    //relacion uno a muchos 

    public function soldados(){
        return $this->hasMany('App\Models\Soldado');
    }
}
