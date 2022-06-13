<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [LoginController::class, 'show']);

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/editar/{parametro?}', [HomeController::class, 'edita']);

Route::post('/editar/{parametro?}', [HomeController::class, 'actualiza']);

/* Route::get('/editar/{parametro?}', function () {
    return view('home.edita')->with('titulo', 'parametro');
}); */

Route::get('/nueva', [HomeController::class, 'nueva']);

Route::post('/nueva/{parametro?}', [HomeController::class, 'creaTar']);

Route::get('/gestiona', [HomeController::class, 'gestiona']);

Route::get('/nuevaEtiqueta', [HomeController::class, 'nuevaEtiqueta']);

Route::post('/nuevaEtiqueta', [HomeController::class, 'creaNuevaEtiqueta']);

Route::get('/borraEti/{parametro?}', [HomeController::class, 'borraEti']);

Route::get('/editaEti/{parametro?}', [HomeController::class, 'editaEti']);

Route::post('/editaEti/{parametro?}', [HomeController::class, 'nuevaEti']);

Route::get('/borrar/{parametro?}', [HomeController::class, 'borra']);

Route::get('/finalizar/{parametro?}', [HomeController::class, 'finaliza']);







/* Route::get('/login', function () {
    return view('home');
})->middleware(['auth'])->name('login'); */

/* require __DIR__.'/auth.php'; */

/* Auth::routes(); */

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
