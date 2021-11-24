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

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    //VISTA DE LA AGENDA PRINCIPAL
    Route::get('/Agenda', 'AgendaController@index')->name('Agenda');
    //METODO RESOURCE PACIENTE
	Route::resource('/paciente','PacienteController');
	//METODO RESOURCE MEDICO
	Route::resource('/medico','MedicoController');
	
});
