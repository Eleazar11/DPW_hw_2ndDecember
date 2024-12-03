<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Estudiantes para Modificar</h1>
        
        <!-- Mostrar los estudiantes -->
        <div class="row">
            @foreach ($listarEstudiantes as $data)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nombre }} {{ $data->apellido }}</h5>
                            <p class="card-text">Código Estudiante: {{ $data->codigo_estudiante }}</p>
                            <p class="card-text">Correo: {{ $data->correo }}</p>
                            <p class="card-text">Estado: {{ $data->estado }}</p>
                            <p class="card-text">Dirección: {{ $data->direccion ?? 'Sin dirección' }}</p>
                            <p class="card-text">Teléfono: {{ $data->telefono ?? 'Sin teléfono' }}</p>
                            
                            <!-- Botón Modificar -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editStudentModal{{ $data->id }}">Modificar</button>
                        </div>
                    </div>
                </div>

                <!-- Modal para editar estudiante -->
                <div class="modal fade" id="editStudentModal{{ $data->id }}" tabindex="-1" aria-labelledby="editStudentModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editStudentModalLabel{{ $data->id }}">Editar Estudiante</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/actualizar_estudiante/' . $data->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nombre{{ $data->id }}" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre{{ $data->id }}" name="nombre" value="{{ $data->nombre }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido{{ $data->id }}" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido{{ $data->id }}" name="apellido" value="{{ $data->apellido }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="correo{{ $data->id }}" class="form-label">Correo</label>
                                        <input type="email" class="form-control" id="correo{{ $data->id }}" name="correo" value="{{ $data->correo }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion{{ $data->id }}" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" id="direccion{{ $data->id }}" name="direccion" value="{{ $data->direccion }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono{{ $data->id }}" class="form-label">Teléfono</label>
                                        <input type="text" class="form-control" id="telefono{{ $data->id }}" name="telefono" value="{{ $data->telefono }}">
                                    </div>
                                    <div class="mb-3">
    <label for="estado{{ $data->id }}" class="form-label">Estado</label>
    <select class="form-select" id="estado{{ $data->id }}" name="estado" required>
        <option value="Activo" {{ $data->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
        <option value="Inactivo" {{ $data->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select>
</div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-warning">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Botón para regresar al Home -->
        <div class="mt-3 text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Regresar al Home</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
