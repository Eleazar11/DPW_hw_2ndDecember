<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Registrar Curso</h3>
        
        <!-- Formulario de registro de curso -->
        <form action="{{ url('/registrar_curso_db') }}" method="POST" class="card p-4 shadow">
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">Código del Curso</label>
                <input type="text" name="codigo" id="codigo" class="form-control" placeholder="Ingrese el código del curso" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Curso</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del curso" required>
            </div>

            <div class="mb-3">
                <label for="horas_curso" class="form-label">Horas del Curso</label>
                <input type="number" name="horas_curso" id="horas_curso" class="form-control" placeholder="Ingrese las horas del curso" required>
            </div>

            <div class="mb-3">
                <label for="laboratorio" class="form-label">Laboratorio</label>
                <select name="laboratorio" id="laboratorio" class="form-control" required>
                    <option value="1">Tiene laboratorio</option>
                    <option value="0">No tiene laboratorio</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="semestre" class="form-label">Semestre</label>
                <input type="text" name="semestre" id="semestre" class="form-control" placeholder="Ingrese el semestre del curso" required>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar Curso</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Regresar al Home</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
