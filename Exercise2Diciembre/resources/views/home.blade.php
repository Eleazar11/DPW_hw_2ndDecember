<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Gestión de la Uni :D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Título Principal -->
        <h1 class="text-center mb-4">Gestión de la Uni :D</h1>

        <!-- Botones de Estudiantes -->
        <h3 class="text-center mb-4">Gestión de Estudiantes</h3>
        <div class="d-flex justify-content-center gap-3 mb-5">
            <a class="btn btn-outline-primary" href="{{url('/registrar_estudiantes_view')}}">Registrar Estudiante</a>
            <a class="btn btn-outline-success" href="{{ url('/ver_estudiantes_view') }}">Ver Estudiantes</a>
            <a class="btn btn-outline-warning" href="{{ url('/editar_estudiante_view') }}">Modificar Estudiantes</a>
            <a class="btn btn-outline-danger" href="{{ url('/eliminar_estudiante_view') }}">Eliminar Estudiantes</a>
        </div>

        <!-- Botones de Cursos -->
        <h3 class="text-center mb-4">Gestión de Cursos</h3>
        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-outline-primary" href="{{url('/registrar_curso_view')}}">Regi strar Curso</a>
            <a class="btn btn-outline-success" href="{{ url('/ver_cursos_view') }}">Ver Cursos</a>
            <a class="btn btn-outline-warning" href="{{ url('/editar_cursos_view') }}">Modificar Cursos</a>
            <a class="btn btn-outline-danger" href="{{ url('/eliminar_cursos_view') }}">Eliminar Cursos</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
