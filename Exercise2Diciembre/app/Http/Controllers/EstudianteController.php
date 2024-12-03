<?php

namespace App\Http\Controllers;

use App\Models\estudiante;  // Importamos el modelo Estudiante
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function registrar_estudiante_db(Request $request)
{
    // Validamos los datos recibidos del formulario
    $validated = $request->validate([
        'codigo_estudiante' => 'required|unique:estudiantes,codigo_estudiante',
        'nombre' => 'required|string|max:100',
        'apellido' => 'required|string|max:100',
        'correo' => 'required|email|max:150',
        'estado' => 'required|in:activo,inactivo',
    ]);

    // Creamos un nuevo objeto Estudiante
    $data = new Estudiante;
    $data->codigo_estudiante = $request->codigo_estudiante;
    $data->nombre = $request->nombre;
    $data->apellido = $request->apellido;
    $data->direccion = $request->direccion; // Dirección opcional
    $data->correo = $request->correo;
    $data->telefono = $request->telefono; // Teléfono opcional
    $data->estado = $request->estado;

    // Guardar los datos del estudiante en la base de datos
    $data->save();

    // Redirigir al Home con un mensaje de éxito
    return redirect()->back();
}



public function ver_estudiantes_db()
    {
        $listarEstudiantes = estudiante::all();
        return view('verEstudiantes', compact('listarEstudiantes'));
    }

    public function eliminar_estudiante($id)
    {
        $estudiante = estudiante::find($id);
    
        if ($estudiante) {
            $estudiante->delete();
            return redirect()->back()->with('success', 'Estudiante eliminado correctamente.');
        }
    
        return redirect()->back()->with('error', 'Estudiante no encontrado.');
    }

    public function editar_estudiante($id)
{
    $estudiante = estudiante::find($id);

    if ($estudiante) {
        return view('modificarEs', compact('estudiante'));
    }

    return redirect()->back()->with('error', 'Estudiante no encontrado.');
}

public function actualizar_estudiante(Request $request, $id)
{
    // Buscar el estudiante por ID
    $estudiante = estudiante::find($id);

    if (!$estudiante) {
        return redirect()->back()->with('error', 'Estudiante no encontrado.');
    }

    // Validar los datos
    $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'correo' => 'required|email|max:255',
        'direccion' => 'nullable|string|max:255',
        'telefono' => 'nullable|string|max:15',
        'estado' => 'required|string|max:20',
    ]);

    // Actualizar los campos
    $estudiante->nombre = $request->nombre;
    $estudiante->apellido = $request->apellido;
    $estudiante->correo = $request->correo;
    $estudiante->direccion = $request->direccion;
    $estudiante->telefono = $request->telefono;
    $estudiante->estado = $request->estado;

    // Guardar los cambios
    $estudiante->save();

    // Redirigir con mensaje de éxito
    return redirect()->back()->with('success', 'Estudiante actualizado correctamente.');
}



    

}
