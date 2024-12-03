<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Estudiantes para Eliminar</h1>
        
        <!-- Mostrar los estudiantes -->
        <div class="row">
            @foreach ($listarEstudiantes as $data)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->nombre }} {{ $data->apellido }}</h5>
                            <p class="card-text">Código Estudiante: {{ $data->codigo_estudiante }}</p>
                            <p class="card-text">Correo: {{ $data->correo }}</p>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmModal{{ $data->id }}">Eliminar</button>
                        </div>
                    </div>
                </div>

                <!-- Modal de confirmación -->
                <div class="modal fade" id="confirmModal{{ $data->id }}" tabindex="-1" aria-labelledby="confirmModalLabel{{ $data->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmModalLabel{{ $data->id }}">Confirmar Eliminación</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ¿Estás seguro de que deseas eliminar al estudiante <strong>{{ $data->nombre }} {{ $data->apellido }}</strong>?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <form action="{{ url('/eliminar_estudiante/'.$data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
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
