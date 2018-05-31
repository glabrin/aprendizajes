<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //Represento la relación 1-*
    public function usuario(){
        return $this->belongTo('Aprendizajes\Usuario');
    }
}
