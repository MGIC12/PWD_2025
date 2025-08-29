<?php
// Procesar subida de archivo
$resultado = include '../Control/subirArchivo.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Subir Archivo</h3>

        <!-- Formulario -->
        <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="archivo" class="form-label">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label>
                <input type="file" name="archivo" id="archivo" class="form-control" required>
                <div class="invalid-feedback">
                    Por favor selecciona un archivo.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Subir</button>
        </form>

        <!-- Mensajes -->
        <?php
        if (!empty($resultado['msg'])) {
            echo "<div class='alert alert-" . ($resultado['tipo'] ?? 'info') . " mt-3' role='alert'>";
            echo htmlspecialchars($resultado['msg']);
            if (!empty($resultado['link'])) {
                echo "<br><a href='" . htmlspecialchars($resultado['link']) . "' target='_blank'>📂 Abrir archivo</a>";
            }
            echo "</div>";
        }
        ?>

    </div>
</div>

<!-- Scripts -->
<script src="./../../../Frameworks/bootstrap.min.js"></script>
<script>
(function() {
    'use strict';

    // Validación de formulario Bootstrap
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    const alertSuccess = document.querySelector('.alert-success');
    if (alertSuccess) {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn btn-secondary mt-2';
        btn.textContent = '⬅ Volver';
        btn.onclick = function() {
            window.location.href = '../../index.php';
        };
        alertSuccess.appendChild(document.createElement('br'));
        alertSuccess.appendChild(btn);
    }
})();
</script>

</body>
</html>
