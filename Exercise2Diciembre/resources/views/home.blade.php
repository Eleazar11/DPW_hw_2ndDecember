<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Gestión de Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Bienvenido al Sistema de Gestión de Estudiantes</h3>

        <!-- Botones de navegación -->
        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-primary" href="{{url('/registrar_estudiantes_view')}}">Registrar Estudiante</a>
            <a class="btn btn-success" href="{{ url('/ver_estudiantes_view') }}">Ver Estudiantes</a>
            <a class="btn btn-warning" href="{{ url('/editar_estudiante_view') }}">Modificar Estudiantes</a>
            <a class="btn btn-danger" href="{{ url('/eliminar_estudiante_view') }}">Eliminar Estudiantes</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
