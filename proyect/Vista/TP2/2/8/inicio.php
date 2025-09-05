<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Cinem@s - Calcular Entrada</title>
    <link href="../../../Frameworks/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap constante -->
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <?php include_once('../../../structure/header.php'); ?>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Cine Cinem@s</h1>
        </div>
        <hr>

        <form id="formCine" class="needs-validation" novalidate method="get" action="resultadoEntrada.php">
            <div class="mb-3">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required min="0">
                <div class="invalid-feedback">Ingrese una edad válida (número positivo).</div>
            </div>

            <div class="mb-3">
                <label class="form-label">¿Eres estudiante?</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estudiante" id="estudianteSi" value="si" required>
                    <label class="form-check-label" for="estudianteSi">Sí</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="estudiante" id="estudianteNo" value="no" required>
                    <label class="form-check-label" for="estudianteNo">No</label>
                </div>
                <div class="invalid-feedback d-block">Por favor seleccione una opción.</div>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Calcular</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>
        </form>
    </div>

    <script src="../../../Frameworks/bootstrap.min.js"></script>
    <script src="../scripts.js"></script>

    <script>
        (() => {
            const edadInput = document.getElementById('edad');

            edadInput.addEventListener('input', () => {
                edadInput.setCustomValidity(
                    (edadInput.value <= 0 || !/^\d+$/.test(edadInput.value)) ? "Ingrese un número positivo" : ""
                );
            });
        })();
    </script>

    <!-- footer -->
    <?php include_once('../../../structure/footer.php'); ?>
</body>
</html>
