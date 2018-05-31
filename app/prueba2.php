<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class prueba2 extends Model
{
    function Prueba()
    {
        return $this->belongTo('aprendizajes/prueba');
    }
}
