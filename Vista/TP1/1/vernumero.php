<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="../../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="../../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <h1 style="float: left">Resultado:</h1>
    <br><br>
    <a href="http://localhost/PWD_2025/Vista/TP1/1/Ejercicio1.php" style="float: right">← Volver a la página anterior</a>
    <br ><br>
    <hr>
    
    <?php
    //Obtener los números ingresados
    $num = $_POST["num"];
    
    //Verificar si el primer número es positivo, negativo o cero
    if ($num > 0){
        echo "El primer número ingresado es: <b>positivo</b> <br>";
    } else if ($num < 0){
        echo "El primer número ingresado es: <b>negativo</b> <br>";
    } else if ($num == 0){
        echo "El primer número ingresado es: <b>cero</b> <br>";
    }

    echo "El número ingresado fue: <b>$num</b> <br>";
    ?>
</body>
</html>