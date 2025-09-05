<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP 1 - PWD 2025</title>
  <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="../../resources/css/styles.css"> -->
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../structure/header.php');
  ?>

  <!-- Header -->
  <header class="container text-center py-5">
    <h1 class="display-4 fw-bold text-primary">Trabajo Práctico N°1</h1>
    <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
      📝 Resolución de ejercicios
    </p>
  </header>

  <!-- Ejercicios -->
  <main class="container my-5 text-center">
    <h2 class="fw-bold mb-4">Ejercicios</h2>
    <div class="row g-3">
      <div class="col-md-6">
        <a class="btn btn-primary btn-lg w-100 shadow" href="1/Ejercicio1.php">Ejercicio 1</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="2/Ejercicio2.php">Ejercicio 2</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="3/Ejercicio3.php">Ejercicio 3</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="4/Ejercicio4.php">Ejercicio 4</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary btn-lg w-100 shadow" href="5/Ejercicio5.php">Ejercicio 5</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="6/Ejercicio6.php">Ejercicio 6</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="7/Ejercicio7.php">Ejercicio 7</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="./8/Inicio.php">Ejercicio 8</a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-primary text-center text-white py-3 mt-auto shadow">
    <small>&copy; 2025 PWD - Todos los derechos reservados</small>
  </footer>

  <script src="../../Frameworks/bootstrap.bundle.min.js"></script>
</body>
</html>
