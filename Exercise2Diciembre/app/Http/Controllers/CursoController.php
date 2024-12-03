<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso; 

class CursoController extends Controller
{
    public function registrar_curso_db(Request $request)
{
    // Validamos los datos recibidos del formulario
    $validated = $request->validate([
        'codigo' => 'required|unique:cursos,codigo',
        'nombre' => 'required|string|max:100',
        'horas_curso' => 'required|integer|min:1',
        'laboratorio' => 'required|boolean',
        'semestre' => 'required|string|max:50',
    ]);

    // Creamos un nuevo objeto Curso
    $curso = new Curso;
    $curso->codigo = $request->codigo;
    $curso->nombre = $request->nombre;
    $curso->horas_curso = $request->horas_curso;
    $curso->laboratorio = $request->laboratorio;
    $curso->semestre = $request->semestre;

    // Guardar los datos del curso en la base de datos
    $curso->save();

    // Redirigir al Home con un mensaje de éxito
    return redirect()->back()->with('success', 'Curso registrado correctamente.');
}

public function ver_cursos_db()
{
    $listarCursos = Curso::all();
    return view('cursos.verCursos', compact('listarCursos'));
}

public function actualizar_curso(Request $request, $id)
{
    // Buscar el curso por ID
    $curso = Curso::find($id);

    if (!$curso) {
        return redirect()->back()->with('error', 'Curso no encontrado.');
    }

    // Validar los datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'codigo' => 'required|string|max:20|unique:cursos,codigo,' . $id,
        'horas_curso' => 'required|integer',
        'laboratorio' => 'required|boolean',
        'semestre' => 'required|string|max:10',
    ]);

    // Actualizar los campos
    $curso->nombre = $request->nombre;
    $curso->codigo = $request->codigo;
    $curso->horas_curso = $request->horas_curso;
    $curso->laboratorio = $request->laboratorio;
    $curso->semestre = $request->semestre;

    // Guardar los cambios
    $curso->save();

    // Redirigir con mensaje de éxito
    return redirect()->back()->with('success', 'Curso actualizado correctamente.');
}

public function eliminar_curso($id)
{
    // Buscar el curso por ID
    $curso = Curso::find($id);

    if ($curso) {
        // Eliminar el curso
        $curso->delete();
        return redirect()->back()->with('success', 'Curso eliminado correctamente.');
    }

    return redirect()->back()->with('error', 'Curso no encontrado.');
}



}
