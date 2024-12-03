<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/eliminar_estudiantes', [EstudianteController::class, 'ver_estudiantes_db']);
Route::delete('/eliminar_estudiante/{id}', [EstudianteController::class, 'eliminar_estudiante']);

Route::put('/actualizar_estudiante/{id}', [EstudianteController::class, 'actualizar_estudiante']);


// Ruta para cargar la vista de registro de cursos
Route::get('/registrar_curso_view', [HomeController::class, 'registrar_cursos_view']);
Route::get('/ver_cursos_view',[HomeController::class,'ver_cursos_view']);
Route::get('/editar_cursos_view',[HomeController::class,'editar_cursos_view']);
Route::get('/eliminar_cursos_view',[HomeController::class,'eliminar_cursos_view']);

// Ruta para registrar un curso en la base de datos
Route::post('/registrar_curso_db', [CursoController::class, 'registrar_curso_db']);

// Ruta para ver los cursos registrados
Route::get('/ver_cursos_db', [CursoController::class, 'ver_cursos_db']);

// Ruta para actualizar un curso
Route::put('/actualizar_curso/{id}', [CursoController::class, 'actualizar_curso']);

// Ruta para eliminar un curso
Route::get('/eliminar_cursos', [CursoController::class, 'ver_cursos_db']);
Route::delete('/eliminar_curso/{id}', [CursoController::class, 'eliminar_curso']);










