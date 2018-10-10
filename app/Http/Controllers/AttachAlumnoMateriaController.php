<?php

namespace App\Http\Controllers;
use App\Materia;
use App\Alumno;

use Illuminate\Http\Request;

class AttachAlumnoMateriaController extends Controller
{
    public function cosoEse(Request $request, Alumno $alumno, Materia $materia)
    {
    	$alumno->materias()->attach($materia->id);
    	return redirect()->route('alumno.index',$request->input('alumno_id'));
    }
    public function asociarAlumnoMateria(Request $request)
    {
//     	$alumno = Alumno::find($request->input('alumno_id'));
//     	$alumno->materias()->attach($request->input('materia_id'));
//     	return redirect()->route('alumnos.alimnoIndex',$request->input('alumno_id'));
    }
}
