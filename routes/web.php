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

Route::get('/persona', function () {
    return view('persona');
})->name('persona');

Route::post('guardar', 'processController@create')->name('guardar');
Route::get('mostrar', 'processController@show')->name('show');
Route::get('borrar/{id}', 'processController@destroy')->name('borrar');
Route::get('editar/{id}', 'processController@edit')->name('editar');
Route::post('actualizar', 'processController@update')->name('actualizar');
