<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./../../../../Frameworks/bootstrap.min.css">
</head>

<body class="">
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
    <div class="container mt-5">
    <h1>TP1 - Ejercicio 1</h1>
    <hr>
    <br>
    <form action="vernumero.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="num" class="form-label">Ingrese un número: </label>
            <input type="number" name="num" id="num" class="form-control" required>
            <div class="invalid-feedback">
                Por Favor Ingrese un Número Válido

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    <script src="../../../../Frameworks/bootstrap.min.js"></script>
    <script src="../scripts.js"></script>
</body>

</html>