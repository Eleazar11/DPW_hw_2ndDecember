<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Cursos</h1>
        
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
