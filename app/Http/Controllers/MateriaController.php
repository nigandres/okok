<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.materiaIndex',compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('materias.materiaForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       dd('nepe');
      $materia = new Materia();
      $materia->crn = $request->input('crn');
      $materia->seccion = $request->seccion;
      $materia->calendario = $request->calendario;
      $materia->materia = $request->materia;
      $materia->hora_inicio = $request->horainicio;
      $materia->salon = $request->salon;
      $materia->user_id = $request->usuario;
      $materia->save();
      return redirect()->route('materia.index');
//       return view('materias.materiaIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
//     public function show(Materia $materia)
    {
      return view('materias.materiaShow',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
//     public function edit(Materia $materia)
    {
      return view('materias.materiaEdit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
//     public function update(Request $request, Materia $materia)
    {
      return view('materias.materiaEdit',compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
//     public function destroy(Materia $materia)
    {
        //
    }
}
