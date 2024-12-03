<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('home');
});


Route::get('/registrar_estudiantes_view',[HomeController::class,'registrar_estudiantes_view']);
Route::get('/ver_estudiantes_view',[HomeController::class,'ver_estudiantes_view']);
Route::get('/editar_estudiante_view',[HomeController::class,'editar_estudiante_view']);
Route::get('/eliminar_estudiante_view',[HomeController::class,'eliminar_estudiante_view']);

Route::post('/registrar_estudiante_db', [EstudianteController::class, 'registrar_estudiante_db']);
Route::get('/ver_estudiantes_db', [EstudianteController::class, 'ver_estudiantes_db']);

//Route::resource('/estudiantes', EstudianteController::class);
Route::get('/eliminar_estudiantes', [EstudianteController::class, 'ver_estudiantes_db']);
Route::delete('/eliminar_estudiante/{id}', [EstudianteController::class, 'eliminar_estudiante']);

//Route::get('/modificar_estudiante/{id}', [EstudianteController::class, 'editar_estudiante']);
//Route::post('/modificar_estudiante/{id}', [EstudianteController::class, 'actualizar_estudiante']);
Route::put('/actualizar_estudiante/{id}', [EstudianteController::class, 'actualizar_estudiante']);









