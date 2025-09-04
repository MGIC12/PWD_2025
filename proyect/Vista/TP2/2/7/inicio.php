<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../Frameworks/bootstrap.min.css">
     <!-- Bootstrap CSS -->
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
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

  <!-- Footer -->
  <footer class="bg-primary text-center text-white py-3 mt-auto shadow">
    <small>&copy; 2025 PWD - Todos los derechos reservados</small>
  </footer>

  <!-- Scripts -->
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>