<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/user/register",[UsersController::class,"store"]);
Route::post('/login', [LoginController::class,"login"]);

Route::middleware(['auth:api', 'account'])->group(function () {
    Route::get("/usuarios", [UsersController::class,"index"]);

    Route::get("/eliminar/usuario/{id}", [UsersController::class,"destroy"]);
    Route::get("/editar/usuario/{id}", [UsersController::class,"edit"]);
    Route::post("/actualizar/usuario/{id}", [UsersController::class,"update"]);
    Route::get("/cerrar/usuario/{id}", [LoginController::class,"logout"]);

    Route::resource('posts' , BlogController::class);
    Route::get('/posts/eliminar/{id}', [BlogController::class, 'destroy']);


});
