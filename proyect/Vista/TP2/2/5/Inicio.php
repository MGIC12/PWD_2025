<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 5</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php include_once('../../../structure/header.php'); ?>

  <div class="container mt-5">
    <div class="card shadow p-4">
      <form class="row g-3 needs-validation" novalidate method="post" action="procesar.php">

        <!-- Nivel de estudios -->
        <div class="col-12 mb-3">
          <h3 class="mb-3">Nivel de estudios</h3>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="1estudios" name="estudios" value="1" required>
            <label class="form-check-label" for="1estudios">No tiene estudios</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="2estudios" name="estudios" value="2" required>
            <label class="form-check-label" for="2estudios">Estudios primarios</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="3estudios" name="estudios" value="3" required>
            <label class="form-check-label" for="3estudios">Estudios secundarios</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
        </div>

        <!-- Género -->
        <div class="col-12 mb-3">
          <h3 class="mb-3">Género</h3>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="sexoM" name="sexo" value="M" required>
            <label class="form-check-label" for="sexoM">Masculino</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="sexoF" name="sexo" value="F" required>
            <label class="form-check-label" for="sexoF">Femenino</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="sexoO" name="sexo" value="O" required>
            <label class="form-check-label" for="sexoO">Otro</label>
            <div class="invalid-feedback">Por favor, seleccione una opción.</div>
          </div>
        </div>

        <!-- Botones -->
        <div class="col-12 d-flex justify-content-start gap-3">
          <button class="btn btn-primary" type="submit">Enviar</button>
          <button class="btn btn-secondary" type="reset">Limpiar</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Footer -->
  <?php include_once('../../../structure/footer.php'); ?>
</body>
</html>
