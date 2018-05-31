<?php

namespace Aprendizajes;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public function materias(){
        return $this->belongsToMany('Aprendizajes\Materia', 'estudiante_materia', 'estudiante_id', 'materia_id');
    }
}
