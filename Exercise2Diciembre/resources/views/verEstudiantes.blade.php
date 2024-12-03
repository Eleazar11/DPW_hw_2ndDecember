<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Estudiantes</h1>
        
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
