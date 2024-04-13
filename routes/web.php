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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    if(\Auth::check()){//Si le damos volver no va a volver al panel

        return redirect('/home');

    }else{
        return redirect()->route('sitio.index');
    }
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'sitio'], function (){

    Route::get( '/index', [App\Http\Controllers\FrontEndController::class, 'index'])->name('sitio.index');
    Route::get( '/preguntas', [App\Http\Controllers\FrontEndController::class, 'preguntas'])->name('sitio.preguntas');
    Route::get( '/blog', [App\Http\Controllers\FrontEndController::class, 'blog'])->name('sitio.blog');
    Route::get( '/community', [App\Http\Controllers\FrontEndController::class, 'community'])->name('sitio.community');
    Route::get( '/nosotros', [App\Http\Controllers\FrontEndController::class, 'nosotros'])->name('sitio.nosotros');
    Route::get( '/projectnews', [App\Http\Controllers\FrontEndController::class, 'projectnews'])->name('sitio.projectnews');
    Route::get( '/newswins', [App\Http\Controllers\FrontEndController::class, 'newswins'])->name('sitio.newswins');
    Route::get( '/newcharacters', [App\Http\Controllers\FrontEndController::class, 'newcharacters'])->name('sitio.newcharacters');
    Route::get( '/nutritionnews', [App\Http\Controllers\FrontEndController::class, 'nutritionnews'])->name('sitio.nutritionnews');
});

Route::get( '/formulario', [App\Http\Controllers\FormularioController::class, 'mostrarFormulario'])->name('/formulario');
Route::post( '/enviar-correo', [App\Http\Controllers\FormularioController::class, 'enviarCorreo'])->name('/enviar-correo');