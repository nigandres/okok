<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['crn','seccion','calendario','materia','hora_inicio','salon','user_id'];
    protected $guarded = ['id','created_at','updated_at'];
    public function user(){
      return $this->belongsTo('App\User');
    }
}
