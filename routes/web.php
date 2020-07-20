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
/*Route::get('/', function () {
    return view('welcome');
});*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}


Auth::routes();

Route::get('/', 'IndexController@index');
Route::get('/entrar', 'IndexController@login');
Route::get('/cadastrar', 'IndexController@register');

Route::get('/home', 'HomeController@principal');

Route::resource('/pacientes', 'PacientesController');

Route::resource('/medicos', 'MedicosController');

Route::resource('/agendamentos', 'AgendamentosController');

//Route::resource('/agendamentos/agenda', 'AgendaController');--teste


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
