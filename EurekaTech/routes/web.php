<?php
use App\Http\Controllers\PageController;
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

Route::get('/', 'PageController@login')->name('login');
Route::get('/inicio', 'PageController@inicio')->name('inicio');
Route::get('/login', 'PageController@login')->name('login');
Route::get('/detalle/{id?}', 'PageController@detalle')->name('detalle');
Route::get('/medicos', 'PageController@medicos')->name('medicos');
Route::put('/detalle/{id}', 'PageController@actualizar')->name('actualizar');
Route::delete('/eliminar/{id}', 'PageController@eliminar')->name('eliminar');
Route::delete('/eliminarMedico/{id}', 'PageController@eliminarMedico')->name('eliminarMedico');
Route::post('/crear', 'PageController@crear')->name('crear');
Route::post('/crearEspecialidad', 'PageController@crearEspecialidad')->name('crearEspecialidad');
Route::post('/crearEspecialidadMedico', 'PageController@crearEspecialidadMedico')->name('crearEspecialidadMedico');
Route::post('/crerMedico', 'PageController@crearMedico')->name('crearMedico');
Route::get('/creditos', 'PageController@creditos')->name('creditos');
Route::post('/loguear', 'PageController@loguear')->name('loguear');
