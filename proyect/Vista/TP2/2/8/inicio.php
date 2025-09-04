<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Cinem@s - Calcular Entrada</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="../../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../../../TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link active fw-bold" href="../../../TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="../../../TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Cine Cinem@s</h1>
    </div>
    <hr>

    <form id="formCine" class="needs-validation" novalidate method="get" action="../../../../Control/TP2/2/8/procesamientoEntrada.php">
        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required min="0">
            <div class="invalid-feedback">Ingrese una edad válida (número positivo).</div>
        </div>

        <div class="mb-3">
            <label class="form-label">¿Eres estudiante?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudiante" id="estudianteSi" value="si" required>
                <label class="form-check-label" for="estudianteSi">Si</label>
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


    <script src="../../../../Frameworks/bootstrap.min.css"></script>
    <script src="../scripts.js"></script>
    <script>
        (() => {
            const edadInput = document.getElementById('edad');

            // Validación en tiempo real (opcional)
            edadInput.addEventListener('input', () => {
                if (edadInput.value <= 0 || !/^\d+$/.test(edadInput.value)) {
                    edadInput.setCustomValidity("Ingrese un número positivo");
                } else {
                    edadInput.setCustomValidity("");
                }
            });
        })();
    </script>

</body>

</html>