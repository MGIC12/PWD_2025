<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
    <title>Ejercicio 2 - TP 3</title>
</head>
<body>
    <div class="container mt-5 bg-dark shadow-lg rounded-3 p-4 text-white">
        <h1 class="text-center m-3 fw-bold text-white">Subir Archivo de Texto</h1>
        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" data-bs-theme="dark" novalidate>
            <label for="file" class="form-label">Seleccione un archivo: </label>
            <input type="file" name="file" class="form-control" required>
            <div class="invalid-feedback">Se debe seleccionar un archivo.</div>
            <input type="submit" class="btn btn-outline-success mt-3" value="Enviar">
        </form>
    </div>
    <script>
        (function() {
            'use strict';
            var forms = document.querySelectorAll('.needs-validation');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>
</html>