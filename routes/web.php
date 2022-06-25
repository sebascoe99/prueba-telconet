<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
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

Route::get("index", [UserController::class, "index"]);

Route::get('/create_user', function() {
    return view('create_user');
})->name('crearUsuario');

Route::post('/edit_user/{id}', [UserController::class, 'store'])->name('editarUsuario');

Route::get('/mostrar_comentarios/{id}', [CommentController::class, 'getAllCommentById'])->name('mostrarComentarios');

Route::post('new_user', [UserController::class, 'store'])->name('create');

// Route::get('/crear_usuario', function () {
//     return view('welcome');
// });
