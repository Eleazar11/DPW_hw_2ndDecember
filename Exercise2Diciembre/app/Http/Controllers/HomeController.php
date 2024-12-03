<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\Curso;


class HomeController extends Controller
{
    public function registrar_estudiantes_view() {
        return view('registroEs');
    }
    public function ver_estudiantes_view() {
        $listarEstudiantes = estudiante::all();
        return view('verEstudiantes', compact('listarEstudiantes'));
    }
    public function editar_estudiante_view() {
        $listarEstudiantes = estudiante::all();
        return view('modificarEs', compact('listarEstudiantes'));
    }
    public function eliminar_estudiante_view() {
        $listarEstudiantes = estudiante::all();
        return view('eliminarEs', compact('listarEstudiantes'));
    }

    public function registrar_cursos_view() {
        return view('cursos.registroCu');
    }
    public function ver_cursos_view() {
        $listarCursos = Curso::all();
        return view('cursos.verCursos', compact('listarCursos'));
    }
    public function editar_cursos_view() {
        $listarCursos = Curso::all();
        return view('cursos.modificarCu', compact('listarCursos'));
    }
    public function eliminar_cursos_view() {
        $listarCursos = Curso::all();
        return view('cursos.eliminarCu', compact('listarCursos'));
    }

}
