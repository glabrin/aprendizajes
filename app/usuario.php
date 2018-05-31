<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //Represento la relación 1-*
    public function roles()
    {
        return $this->hasMany('Aprendizajes\Rol');
    }
}
