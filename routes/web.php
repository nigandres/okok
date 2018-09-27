<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/begin', function () {
    return view('begin');
});

// Route::get('/materia/index', function () {
//     return view('materias.materiaIndex');
// });

// Route::get('/materia/create', function () {
//     return view('materias.materiaForm');
// });

// Route::post('/materia/store', function () {
// //     return view('materias.materiaIndex');
// });

// Route::get('/materia/show/{id}', function ($id) {
// //     dd($id);
//     return view('materias.materiaShow',compact('id'));
// });

// Route::get('/materia/edit/{id}', function ($id) {
//     return view('materias.materiaEdit',compact('id'));
// });

// Route::post('/materia/update/{id}', function ($id) {
// //     return view('materias.materiaEdit',compact('id'));
// });
// Route::get('/materias','MateriaController@index');
Route::resource('/materia','MateriaController');
Route::resource('/alumno','AlumnoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





#Route::get('/materias',function(){return view('materias.materiaIndex');});
#Route::get('/coso',function(){return '<h1>holamundo</h1>';});
