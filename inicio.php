<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenida - PWD 2025</title>
  <link rel="stylesheet" href="./Frameworks/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">PWD 2025</a>
    </div>
  </nav>

  <!-- Header -->
  <header class="container text-center py-5">
    <h1 class="display-5 fw-bold text-primary">¡Bienvenid@!</h1>
    <p class="lead">Estás a punto de conocer nuestro <span class="fw-bold">portfolio</span> 🚀</p>
    <p class="mt-3">Antes de eso, nos gustaría saber tu nombre:</p>

    <!-- Formulario -->
    <form id="nombreForm" class="w-50 mx-auto mt-4" action="./proyect/index.php" method="post">
      <div class="mb-3">
        <input type="text" class="form-control form-control-lg text-center shadow-sm" id="nombre" name="nombre" placeholder="Ingresá tu nombre">
      </div>
      <button type="submit" class="btn btn-primary btn-lg shadow">Enviar</button>
    </form>

    <!-- Mensaje de Error -->
    <div id="errorDiv" class="mt-4 d-none">
      <img src="./proyect/resources/img/Captura de pantalla 2025-09-04 121439.png" 
           alt="Error" 
           class="img-fluid w-25 shadow-lg rounded">
      <p class="text-danger fw-bold mt-3">⚠️ Por favor, ingresá un nombre válido (solo letras).</p>
    </div>

    <!-- Mensaje Correcto -->
    <div id="okDiv" class="mt-4 d-none">
      <img src="./proyect/resources/img/altoquemirey.png" 
           alt="Correcto" 
           class="img-fluid w-25 shadow-lg rounded">
      <p class="text-success fw-bold mt-3">✅ Nombre válido, redirigiendo...</p>
    </div>
  </header>

  <!-- Footer -->
  <footer class="bg-primary text-center text-white py-3 mt-auto shadow">
    <small>&copy; 2025 PWD - Todos los derechos reservados</small>
  </footer>

  <script src="./Frameworks/bootstrap.bundle.min.js"></script>
  <script src="./resources/js/validacionNombre.js"></script>
  <script src="inicioScript.js"></script>
</body>
</html>
