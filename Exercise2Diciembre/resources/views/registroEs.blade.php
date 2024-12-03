<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center mb-4">Registrar Estudiante</h3>
        
        <!-- Formulario de registro de estudiante -->
        <form action="{{ url('/registrar_estudiante_db') }}" method="POST" class="card p-4 shadow">
            @csrf
            <div class="mb-3">
                <label for="codigo_estudiante" class="form-label">Código Estudiante</label>
                <input type="text" name="codigo_estudiante" id="codigo_estudiante" class="form-control" placeholder="Ingrese el código del estudiante" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre del estudiante" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido del estudiante" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <textarea name="direccion" id="direccion" class="form-control" rows="3" placeholder="Ingrese la dirección del estudiante"></textarea>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" placeholder="Ingrese el correo del estudiante" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingrese el teléfono del estudiante">
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select name="estado" id="estado" class="form-control" required>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Registrar Estudiante</button>
            </div>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ url('/') }}" class="btn btn-secondary">Regresar al Home</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
