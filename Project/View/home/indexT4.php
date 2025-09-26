<?php 
    $titulo = "Inicio - PWD 2025";
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_IBENJAMINDLF/Project/View/components/header.php';
?>

<link rel="stylesheet" href="<?php echo $BASE_URL; ?>Project/View/assets/style/styleCarrusel.css">

  <!-- Header propio -->
  <header class="container text-center py-5">
    <h1 class="display-4 fw-bold text-primary">Trabajo Práctico N°4</h1>
    <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
      📝 Resolución de ejercicios
    </p>
  </header>

  <!-- Contenido principal -->
  <main class="container my-5 text-center">
    <h2 class="fw-bold mb-4">Ejercicios</h2>
    <div class="row g-3">
      <div class="col-md-6">
        <a class="btn btn-primary btn-lg w-100 shadow" href="https://github.com/Ibenjamindlf/Prog-Web-Dinamica/tree/main/Project/Model">Ejercicio 1</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="https://github.com/Ibenjamindlf/Prog-Web-Dinamica/tree/main/Project/Controller">Ejercicio 2</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="../admin/administrarAutos.php">Ejercicio 3</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="../admin/buscarAuto.php">Ejercicio 4</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary btn-lg w-100 shadow" href="../admin/listaPersonas.php">Ejercicio 5</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="../admin/nuevaPersona.php">Ejercicio 6</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="../admin/nuevoAuto.php">Ejercicio 7</a>
        <a class="btn btn-primary btn-lg w-100 shadow mt-3" href="../admin/CambioDuenio.php">Ejercicio 8</a>
      </div>
      <div class="col-md-6">
        <a class="btn btn-primary btn-lg w-100 shadow" href="../admin/buscarPersona.php">Ejercicio 9</a>
      </div>
    </div>
  </main>

<!-- Footer -->
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_IBENJAMINDLF/Project/View/components/footer.php';
?>

