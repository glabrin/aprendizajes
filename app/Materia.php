<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	//Represento la relación 1-*
    public function profesor(){
        return $this->belongTo('Aprendizajes\Profesor');
    }

    public function estudiantes(){
        return $this->belongsToMany('Aprendizajes\Estudiante','estudiante_materia', 'materia_id', 'estudiante_id');
    }
}
