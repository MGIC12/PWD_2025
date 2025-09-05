<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 7</title>
  <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
  <!-- Bootstrap CSS -->
</head>

<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>

  <!-- Header -->
  <header class="container text-center py-5">
    <h1 class="display-5 fw-bold text-primary">Validación con Bootstrap</h1>
    <p class="lead text-secondary">Ejemplo: Calculadora Básica</p>
  </header>

  <!-- Formulario -->
  <main class="container my-4">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg border-0 rounded-3">
          <div class="card-body p-4">
            <h2 class="h4 mb-4 text-center fw-bold">Calculadora Básica</h2>

            <form class="row g-3 needs-validation" novalidate action="procesar.php" method="post">

              <!-- Primer número -->
              <div class="col-md-6">
                <label for="validacionPrimerDigito" class="form-label">Primer dígito</label>
                <input type="number" class="form-control" id="validacionPrimerDigito" name="num1" required>
                <div class="invalid-feedback">Por favor, ingrese el primer dígito.</div>
              </div>

              <!-- Segundo número -->
              <div class="col-md-6">
                <label for="validacionSegundoDigito" class="form-label">Segundo dígito</label>
                <input type="number" class="form-control" id="validacionSegundoDigito" name="num2" required>
                <div class="invalid-feedback">Por favor, ingrese el segundo dígito.</div>
              </div>

              <!-- Operación -->
              <div class="col-12">
                <label for="validacionOperacion" class="form-label">Operación</label>
                <select class="form-select" name="operacion" id="validacionOperacion" required>
                  <option selected disabled value="">Seleccione una operación</option>
                  <option value="suma">Suma</option>
                  <option value="resta">Resta</option>
                  <option value="multiplicacion">Multiplicación</option>
                  <option value="division">División</option>
                </select>
                <div class="invalid-feedback">Por favor, seleccione una operación.</div>
              </div>

              <!-- Botones -->
              <div class="col-12 d-flex justify-content-center gap-3 mt-3">
                <button class="btn btn-primary px-4" type="submit">Enviar</button>
                <button class="btn btn-outline-secondary px-4" type="reset">Limpiar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>


  <!-- Scripts -->
  <script src="../../../Frameworks/bootstrap.min.js"></script>
  <script src="script.js"></script>


  <!-- footer -->

  <?php
  include_once('../../../structure/footer.php');
  ?>

</body>

</html>