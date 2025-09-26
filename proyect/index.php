<?php 
  $nombre = ""; // Inicializamos la variable para evitar el warning

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre'] ?? "");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - PWD 2025</title>
  <link rel="stylesheet" href="./Vista//Frameworks/bootstrap.min.css">
  <link rel="stylesheet" href="./resources/css/styleCarrusel.css">
</head>

<body class="d-flex flex-column min-vh-100">

   <!-- Navbar -->
  <?php
  include_once('Vista/structure/header.php');
  ?>

  <!-- Header -->
  <header class="container text-center py-5">
    <h1 class="display-4 fw-bold text-primary">Bienvenid@  <?= htmlspecialchars($nombre) ?> a PWD 2025</h1>
    <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
      🚀 Trabajos Prácticos y equipo de desarrollo
    </p>
    <div class="mt-4">
      <a href="#integrantes" class="btn btn-primary btn-lg shadow">Ver equipo de desarrollo</a>
    </div>
  </header>
  <main id="proyectos-destacados" class="container text-center my-5">
      <h2>proyectos destacados</h2>
      <div class="mt-4">
        <a href="./Vista/TP1/8/Inicio.php" class="btn btn-primary btn-lg shadow">Ejercicio 8 T.P N°1</a>
        <a href="./Vista/TP2/4/inicio.php" class="btn btn-primary btn-lg shadow">Ejercicio 4 T.P N°2</a>
        <a href="./Vista/TP3/3Benja/inicio.php" class="btn btn-primary btn-lg shadow">Ejercicio 3 T.P N°3</a>
      </div>
  </main>
  <main id="resolucion-trabajos" class="container text-center my-5">
      <h2>Resolucion de trabajos practicos</h2>
      <div class="mt-4">
        <a href="./Vista/TP1/index.php" class="btn btn-primary btn-lg shadow">Trabajo Practico N°1</a>
        <a href="./Vista/TP2/index.php" class="btn btn-primary btn-lg shadow">Trabajo Practico N°2</a>
        <a href="./Vista/TP3/index.php" class="btn btn-primary btn-lg shadow">Trabajo Practico N°3</a>
        <a href="../Project/View/home/indexT4.php" class="btn btn-primary btn-lg shadow">Trabajo Practico N°4</a>
      </div>
  </main>
  <!-- Integrantes -->
<main id="integrantes" class="container my-5">
  <h2 class="text-center">Equipo de desarrollo</h2>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner text-center">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <a href="https://github.com/Ibenjamindlf" target="_blank">
          <img src="https://avatars.githubusercontent.com/u/206235917?v=4" class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Benja">
        </a>
        <div class="mt-3">
          <h5>Benjamin de la Fuente</h5>
          <p>@Ibenjamindlf</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <a href="https://github.com/tebacs" target="_blank">
          <img src="https://avatars.githubusercontent.com/u/149085169?v=4" class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Mati">
        </a>
        <div class="mt-3">
          <h5>Matias Bacsay</h5>
          <p>@tebacs</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <a href="https://github.com/MGIC12" target="_blank">
          <img src="https://avatars.githubusercontent.com/u/68124872?v=4" class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="marian">
        </a>
        <div class="mt-3">
          <h5>Mariano Infante</h5>
          <p>@MGIC12</p>
        </div>
      </div>

      <!-- Slide 4 (nuevo) -->
      <div class="carousel-item">
        <a href="https://github.com/FacuLedesmaBertalot" target="_blank">
          <img src="https://avatars.githubusercontent.com/u/150484970?v=4" class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Facu" alt="nuevo">
        </a>
        <div class="mt-3">
          <h5>Facundo Ledesma</h5>
          <p>@FacuLedesmaBertalot</p>
        </div>
      </div>
    </div>

    <!-- Indicators (agregamos el cuarto botón) -->
    <div class="carousel-indicators position-static mt-2">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>

    <!-- Controles prev/next -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</main>


  </main>

  <!-- footer -->
   
    <?php
    include_once('Vista/structure/footer.php');
    ?>


  <script src="./Frameworks/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
