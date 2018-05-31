<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    function prueba2()
    {
        return $this->hasMany('aprendizajes/prueba2');
    }
}
