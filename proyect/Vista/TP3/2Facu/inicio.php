<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Subir TXT</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

     
      <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
    <div class="container mt-5">
        <div class="card shadow p-4">

            <h3 class="mb-4">Subir Archivo</h3>

            <!-- Formulario -->
            <form id="fileForm" action="procesar.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                <div class="mb-3">
                    <label for="archivo" class="form-label">Selecciona un archivo: (.txt)</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                    <!-- Mensajes de validación de Bootstrap -->
                    <div class="invalid-feedback">Por favor selecciona un archivo .txt.</div>
                    <div class="valid-feedback">Archivo válido.</div>
                </div>

                <button type="submit" class="btn btn-primary">Subir</button>

            </form>

        </div>
    </div>

    <script src="../../../Frameworks/bootstrap.min.js"></script>
    <script src="./script.js"></script>

    <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>

</html>
