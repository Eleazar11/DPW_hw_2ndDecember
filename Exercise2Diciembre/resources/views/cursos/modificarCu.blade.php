<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Cursos para Modificar</h1>
        
        <!-- Mostrar los cursos -->
        <div class="row">
            @foreach ($listarCursos as $curso)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curso->nombre }}</h5>
                            <p class="card-text">Código del Curso: {{ $curso->codigo }}</p>
                            <p class="card-text">Horas: {{ $curso->horas_curso }}</p>
                            <p class="card-text">Laboratorio: {{ $curso->laboratorio == 1 ? 'Tiene laboratorio' : 'No tiene laboratorio' }}</p>
                            <p class="card-text">Semestre: {{ $curso->semestre }}</p>
                            
                            <!-- Botón Modificar -->
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editCourseModal{{ $curso->id }}">Modificar</button>
                        </div>
                    </div>
                </div>

                <!-- Modal para editar curso -->
                <div class="modal fade" id="editCourseModal{{ $curso->id }}" tabindex="-1" aria-labelledby="editCourseModalLabel{{ $curso->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCourseModalLabel{{ $curso->id }}">Editar Curso</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ url('/actualizar_curso/' . $curso->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nombre{{ $curso->id }}" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre{{ $curso->id }}" name="nombre" value="{{ $curso->nombre }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="codigo{{ $curso->id }}" class="form-label">Código del Curso</label>
                                        <input type="text" class="form-control" id="codigo{{ $curso->id }}" name="codigo" value="{{ $curso->codigo }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="horas_curso{{ $curso->id }}" class="form-label">Horas del Curso</label>
                                        <input type="number" class="form-control" id="horas_curso{{ $curso->id }}" name="horas_curso" value="{{ $curso->horas_curso }}" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="laboratorio{{ $curso->id }}" class="form-label">Laboratorio</label>
                                        <select class="form-select" id="laboratorio{{ $curso->id }}" name="laboratorio" required>
                                            <option value="1" {{ $curso->laboratorio == 1 ? 'selected' : '' }}>Tiene laboratorio</option>
                                            <option value="0" {{ $curso->laboratorio == 0 ? 'selected' : '' }}>No tiene laboratorio</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="semestre{{ $curso->id }}" class="form-label">Semestre</label>
                                        <input type="text" class="form-control" id="semestre{{ $curso->id }}" name="semestre" value="{{ $curso->semestre }}" required>
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
