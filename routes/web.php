<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/login', [LoginController::class,"index"])->name('login');
Route::post('/login', [LoginController::class,"login"]);//->name('login.sesion');

Route::post("/usuarios", [UsersController::class,"store"]);
Route::post("/store",[UsersController::class,"store"]);

Route::post("/user/register",[UsersController::class,"store"]);

Route::get('/users/active/account/{token}' , [LoginController::class,"validateAccount"]);

Route::middleware(['auth:api', 'account'])->group(function () {
    Route::get("/usuarios", [UsersController::class,"index"]);

    Route::get("/eliminar/usuario/{id}", [UsersController::class,"destroy"]);
    Route::get("/editar/usuario/{id}", [UsersController::class,"edit"]);
    Route::post("/actualizar/usuario/{id}", [UsersController::class,"update"]);
    Route::get("/cerrar/usuario/{id}", [LoginController::class,"logout"]);

    Route::resource('posts' , BlogController::class);
    Route::get('/posts/eliminar/{id}', [BlogController::class, 'destroy']);


});



    /*Route::get("/usuarios", [UsersController::class,"index"]);
    Route::post("/usuarios", [UsersController::class,"store"]);
    Route::post("/store",[UsersController::class,"store"]);
    Route::get("/eliminar/usuario/{id}", [UsersController::class,"destroy"]);
    Route::get("/editar/usuario/{id}", [UsersController::class,"edit"]);
    Route::post("/actualizar/usuario/{id}", [UsersController::class,"update"]);
    Route::get("/cerrar/usuario/{id}", [LoginController::class,"logout"]);*/

