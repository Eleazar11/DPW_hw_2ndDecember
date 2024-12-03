<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;

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
}
