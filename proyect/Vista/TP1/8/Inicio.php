<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 8</title>
  <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link active fw-bold" href="../index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="../../TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="../../TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Formulario -->
  <main class="container my-5">
    <div class="card shadow-lg p-4">
      <h2 class="text-center text-primary fw-bold mb-4">Ejercicio 8</h2>

      <form method="post" action="procesar.php" class="row g-3">
        <!-- Nombre -->
        <div class="col-12">
          <label for="nombre" class="form-label fw-bold">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control shadow-sm" required>
        </div>

        <!-- Apellido -->
        <div class="col-12">
          <label for="apellido" class="form-label fw-bold">Apellido</label>
          <input type="text" id="apellido" name="apellido" class="form-control shadow-sm" required>
        </div>

        <!-- Edad -->
        <div class="col-12">
          <label for="edad" class="form-label fw-bold">Edad</label>
          <input type="number" id="edad" name="edad" class="form-control shadow-sm" required>
        </div>

        <!-- Estudios -->
        <div class="col-12">
          <label class="form-label fw-bold">Estudios</label>
          <div class="form-check">
            <input type="radio" id="no_estudia" name="estudios" value="0" class="form-check-input" required>
            <label for="no_estudia" class="form-check-label">No estoy estudiando actualmente</label>
          </div>
          <div class="form-check">
            <input type="radio" id="estudia" name="estudios" value="1" class="form-check-input" required>
            <label for="estudia" class="form-check-label">Me encuentro estudiando</label>
          </div>
        </div>

        <!-- Botones -->
        <div class="col-12 d-flex justify-content-center gap-3 mt-3">
          <button type="submit" class="btn btn-success btn-lg shadow px-5">Enviar</button>
          <button type="reset" class="btn btn-secondary btn-lg shadow px-5">Limpiar</button>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-primary text-center text-white py-3 mt-auto shadow">
    <small>&copy; 2025 PWD - Todos los derechos reservados</small>
  </footer>

  <script src="./../../../Frameworks/bootstrap.bundle.min.js"></script>
</body>
</html>
