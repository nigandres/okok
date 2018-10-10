<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
//     public $timestamps = false;
    public function alumno(){
      return $this->belongsToMany('App\Materia');
    }
}
