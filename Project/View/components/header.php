<?php
include_once '../../../configuracion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="/PWD_2025/project/view/assets/style/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style/styleValidaciones.css">
    <!-- titulo por pagina -->
    <title><?php echo $titulo ?></title>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
        <a class="navbar-brand fw-bold" href="<?php echo $BASE_URL; ?>Project/view/home/index.php">PWD 2025</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo $BASE_URL; ?>Project/view/home/index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $BASE_URL; ?>Project/View/T1/index.php">TP 1</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $BASE_URL; ?>Project/View/T2/index.php">TP 2</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $BASE_URL; ?>Project/View/T3/index.php">TP 3</a></li>
          </ul>
        </div>
      </div>
    </nav>