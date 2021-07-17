<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;

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
    return view('home');
})->middleware('auth'); /* autenticarse en el inicio de la app */

Route::resource('listusers', App\Http\Controllers\UserController::class)
->middleware('auth'); /* ruta recurso del crud de usuarios */

Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index'); /* registrarse con autenticacion de invitado */

Route::post('/register', [RegisterController::class, 'store'])->name('register.store'); /* guardar formulario de registro */

Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index'); /* loguearse con autenticación de invitado */

Route::post('/login', [SessionsController::class, 'store'])->name('login.store'); /* guardar formulario de login para autenticación */

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy'); /* desloguearse con autenticacion */
