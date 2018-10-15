<?php

namespace App\Http\Controllers;

use App\Materia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MateriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
      $request->validate([
        'crn' => 'required|max:6|min:5',
      ]);
//       dd('nepe');
      $materia = new Materia();
      $materia->crn = $request->input('crn');
      $materia->seccion = $request->seccion;
      $materia->calendario = $request->calendario;
      $materia->materia = $request->materia;
      $materia->hora_inicio = $request->hora_inicio;
      $materia->salon = $request->salon;
      $materia->user_id = $request->user_id;
      $materia->save();
//       $request->merge(['user_id' => Auth::user()->id]);
//       Materia::create($request->all());
      
      //metodo save de guardar relacion/////////////////////
      /*$materia = new Materia($request->all());
      $ser = User::find(Auth::user()->id);
      $user->materias()->save($materia);*/
      //metodo save de guardar relacion/////////////////////
      
      
      
      
      
      return redirect()->route('materia.index');
//       return view('materias.materiaIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
//     public function show(Materia $materium)
//     public function show($id)
    {
//       $materia = Materia::find($id);
      $materia->load('user');
//       dd(Auth::user()->nombre,Auth::id(),$materia->load('user'));
//       $subject = Materia::find($id);
//       dd($sbject);
//       return view('materias.materiaShow',compact('$subject'));
//       return view('materias.materiaShow')->with(['subject' => $materia]);
      return view('materias.materiaShow',compact('materia'));
//       return view('materias.materiaShow')->with(['subject' => $materia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
//     public function edit($id)
    public function edit(Materia $materia)
    {
      return view('materias.materiaForm',compact('materia'));
//       return view('materias.materiaEdit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
//     public function update(Request $request, $id)
    public function update(Request $request, Materia $materia)
    {
//       dd("adios",$materia,$request->all());
      $materia->crn = $request->input('crn');
      $materia->seccion = $request->seccion;
      $materia->calendario = $request->calendario;
      $materia->materia = $request->materia;
      $materia->hora_inicio = $request->hora_inicio;
      $materia->salon = $request->salon;
      $materia->user_id = $request->user_id;
      $materia->save();
//       dd("adios",$materia,$request->all());
      return redirect()->route('materia.show',compact('materia'));
//       return view('materias.materiaEdit',compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
//     public function destroy($id)
    public function destroy(Materia $materia)
    {
//         dd("hola",$materia);
        $materia->delete();
        return redirect()->route('materia.index');
    }
}
