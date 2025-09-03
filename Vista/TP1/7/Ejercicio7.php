<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
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
  
    <h1>TP1 - Ejercicio 7</h1>
    <hr><br>
    <form action="calculadora.php" method="get">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2: </label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>