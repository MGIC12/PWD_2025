<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Datos</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
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
    <h1>Datos</h1>
    <hr>

    <form action="../../../../Control/TP2/2/4/datos.php" method="get" class="needs-validation" novalidate id="formDatos">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese un nombre válido (solo letras y espacios).</div>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese un apellido válido (solo letras y espacios).</div>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad:</label>
            <input type="number" name="edad" id="edad" class="form-control" required min="0">
            <div class="invalid-feedback">Por favor ingrese una edad válida.</div>
        </div>

        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" required>
            <div class="invalid-feedback">Por favor ingrese su dirección.</div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="../../../../Frameworks/bootstrap.min.js"></script>

    <!-- Validaciones JS  Globales-->
    <script src="../scripts.js"></script>
    
    <script>
        const nombre = document.getElementById('nombre');
        const apellido = document.getElementById('apellido');

        const validarLetras = (input) => {
            const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity("Solo letras y espacios permitidos");
            } else {
                input.setCustomValidity("");
            }
        };

        [nombre, apellido].forEach(campo => {
            campo.addEventListener('input', () => validarLetras(campo));
        });
    </script>
</body>

</html>