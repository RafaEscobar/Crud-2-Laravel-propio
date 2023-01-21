<?php

use App\Http\Controllers\AnimesGroupController;
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
 
Route::controller(AnimesGroupController::class)->group(function(){
    // Listar
    Route::get('animes/', 'read')->name('animes');
    // Crear
    Route::get('animes/create', 'create')->name('animes.create');
    // Crear submit
    Route::post('animes/anime', 'store')->name('animes.store');
    // Actualizar
    Route::get('animes/update/{id}', 'update')->name('animes.update');
    // Mostrar registro individual
    Route::get('animes/{id}', 'show')->name('animes.show');
    // Actualizar submit
    Route::put('animes/{id}', 'submit')->name('animes.submit');
    // Eliminar
    Route::delete('animes/{id}', 'destroy')->name('animes.destroy');


});


