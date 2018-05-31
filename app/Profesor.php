<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
	//Represento la relación 1-*
    public function materias()
    {
        return $this->hasMany('Aprendizajes\Materia');
    }
}
