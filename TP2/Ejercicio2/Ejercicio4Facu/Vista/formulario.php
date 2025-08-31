<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Datos</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Datos</h1>
    <hr>

    <form action="../Control/datos.php" method="get" class="needs-validation" novalidate id="formDatos">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese un nombre válido (solo letras y espacios).</div>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese un apellido válido (solo letras y espacios).</div>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required min="0">
            <div class="invalid-feedback">Por favor ingrese una edad válida.</div>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese su dirección.</div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <!-- Bootstrap JS -->
    <script src="../../../../Frameworks/bootstrap.min.js"></script>

    <!-- Validaciones JS -->
    <script>
        (() => {
            'use strict';
            const form = document.getElementById('formDatos');

            // Validación Bootstrap
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });

            // Validación nombre y apellido solo letras y espacios
            const nombre = document.getElementById('nombre');
            const apellido = document.getElementById('apellido');

            const soloLetras = e => {
                e.value = e.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g,'');
            };

            nombre.addEventListener('input', e => soloLetras(e.target));
            apellido.addEventListener('input', e => soloLetras(e.target));

        })();
    </script>
</body>
</html>


