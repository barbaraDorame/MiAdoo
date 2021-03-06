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
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'tipo:Responsable,Instructor'], function()
{
  Route::resource('propuestas', 'PropuestaController');
});
Route::group(['middleware' => 'tipo:Responsable'], function()
{
  Route::resource('cursos', 'CursoController');
});

Route::group(['middleware' => 'tipo:Responsable'], function()
{
  Route::resource('convocatorias', 'ConvocatoriaController');
});

Route::resource('alumnos', 'AlumnoController');
Auth::routes();
