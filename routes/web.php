<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function(){
    return redirect(route('login'));
});
//Ruta para ir a perfil de docentes
Route::resource("/teacher", 'DocentesController');
//Ruta para ir a acerca de
Route::get('/about',function(){
    return view("pages.about");
})->name('about');
//Ruta para ir a inscripción de materias
Route::get('/inscripcionMaterias','InscripcionesController@index')->name('inscMaterias');
//Ruta para ingresar inscripción
Route::post('/inscripcion/create',['as' => 'createInsc', 'uses' => 'InscripcionesController@store']);