<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Subir TXT</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">

            <h3 class="mb-4">Subir Archivo</h3>

            <!-- Formulario -->
            <form id="fileForm" action="../Vista/procesar.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="mb-3">
                    <label for="archivo" class="form-label">Selecciona un archivo: (.txt)</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                    <!-- Mensajes de validación de Bootstrap -->
                    <div class="invalid-feedback">Por favor selecciona un archivo .txt.</div>
                    <div class="valid-feedback">Archivo válido.</div>
                </div>

                <button type="submit" class="btn btn-primary">Subir</button>

            </form>

        </div>
    </div>

    <script src="../../../Frameworks/bootstrap.min.js"></script>
    <script>
        document.getElementById('fileForm').addEventListener('submit', function(e) {
            const inputArchivo = document.getElementById('archivo');

            // Limpio clases previas
            inputArchivo.classList.remove('is-invalid', 'is-valid');

            // Validación
            if (inputArchivo.files.length === 0) {
                e.preventDefault();
                inputArchivo.classList.add('is-invalid');
            } else {
                const file = inputArchivo.files[0];
                const allowedExtensions = ["txt"];
                const extension = file.name.split(".").pop().toLowerCase();

                if (!allowedExtensions.includes(extension)) {
                    e.preventDefault();
                    inputArchivo.classList.add('is-invalid');
                } else {
                    inputArchivo.classList.add('is-valid');
                }
            }
        });
    </script>
</body>

</html>
