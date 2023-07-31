<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    use HasFactory;

    //reolacion de uno a muchos (inversa)

    public function servicio(){
        return $this->belongsTo('App\Models\Servicio');
    }
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


 

}
