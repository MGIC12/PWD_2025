<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="./../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="./../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <h1>TP1 - Ejercicio 4</h1>
    <form action="verdatos2.php" method="get">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required>
        <br><br>
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" required>
        <br><br>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>