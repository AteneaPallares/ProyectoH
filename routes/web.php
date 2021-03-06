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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuarios','App\Http\Controllers\UserController@index')->name('users.index');
Route::get('/usuarios/all','App\Http\Controllers\UserController@showall')->name('users.showall');
Route::get('/usuarios/editar/{id}','App\Http\Controllers\UserController@showedit')->name('users.edit');
Route::get('/usuarios/detalleone/{id}','App\Http\Controllers\UserController@showone')->name('users.nuevo');
Route::get('/usuarios/agregar','App\Http\Controllers\UserController@create')->name('users.create');
Route::get('/usuarios/detalle/{id}','App\Http\Controllers\UserController@show')->name('users.show');
Route::get('/usuarios/actual','App\Http\Controllers\UserController@actual')->name('users.show');
Route::apiResource('usuarios', 'App\Http\Controllers\UserController');

Route::apiResource('roles', 'App\Http\Controllers\RoleController');

Route::get('/pacientes','App\Http\Controllers\PacienteController@index')->name('pacientes.index');
Route::get('/pacientes/all','App\Http\Controllers\PacienteController@showall')->name('pacientes.showall');
Route::get('/pacientes/editar/{id}','App\Http\Controllers\PacienteController@showedit')->name('pacientes.edit');
Route::get('/pacientes/detalleone/{id}','App\Http\Controllers\PacienteController@showone')->name('pacientes.nuevo');
Route::get('/pacientes/agregar','App\Http\Controllers\PacienteController@create')->name('pacientes.create');
Route::get('/pacientes/detalle/{id}','App\Http\Controllers\PacienteController@show')->name('pacientes.show');
Route::apiResource('pacientes', 'App\Http\Controllers\PacienteController');

Route::get('/historiales','App\Http\Controllers\DiagnoseController@index')->name('historiales.index');
Route::get('/historiales/all','App\Http\Controllers\DiagnoseController@showall')->name('historiales.showall');
Route::get('/historiales/editar/{id}','App\Http\Controllers\DiagnoseController@showedit')->name('historiales.edit');
Route::get('/historiales/detalleone/{id}','App\Http\Controllers\DiagnoseController@showone')->name('historiales.nuevo');
Route::get('/historiales/agregar','App\Http\Controllers\DiagnoseController@create')->name('historiales.create');
Route::get('/historiales/agregar/{id}','App\Http\Controllers\DiagnoseController@patient')->name('historiales.createpat');
Route::get('/historiales/detalle/{id}','App\Http\Controllers\DiagnoseController@show')->name('historiales.show');
Route::apiResource('historiales', 'App\Http\Controllers\DiagnoseController');

Route::get('/areas','App\Http\Controllers\AreaController@index')->name('areas.index');
Route::get('/areas/all','App\Http\Controllers\AreaController@showall')->name('areas.showall');
Route::get('/areas/editar/{id}','App\Http\Controllers\AreaController@showedit')->name('areas.edit');
Route::get('/areas/detalleone/{id}','App\Http\Controllers\AreaController@showone')->name('areas.nuevo');
Route::get('/areas/agregar','App\Http\Controllers\AreaController@create')->name('areas.create');
Route::get('/areas/detalle/{id}','App\Http\Controllers\AreaController@show')->name('areas.show');
Route::apiResource('areas', 'App\Http\Controllers\AreaController');
