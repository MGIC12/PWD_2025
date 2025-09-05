<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column min-vh-100">
      <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>
  <div class="container mt-5">
    <div class="contenedor-form">
        <form class="row g-3 needs-validation" novalidate  method="post" action="procesar.php">
            <div class="form-check contenedor-nivEstudios">
                <h3>Nivel de estudios</h3>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="1estudios" name="estudios" value="1" required>
                    <label class="form-check-label" for="1estudios">
                        No tiene estudios
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="2estudios" name="estudios" value="2" required>
                    <label class="form-check-label" for="2estudios">
                        Estudios primarios
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="3estudios" name="estudios" value="3" required>
                    <label class="form-check-label" for="3estudios">
                        Estudios Secundarios
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
            </div>
            <div class="form-check contenedor-genero">
                <h3>Genero</h3>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="sexoM" name="sexo" value="M" required>
                    <label class="form-check-label" for="sexoM">
                        Masculino
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexoF" value="F" required> <label class="form-check-label" for="sexoF">
                        Femenino
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="sexoO" value="O" required>
                    <label class="form-check-label" for="sexoO">
                        Otro
                    </label>
                    <!-- Mensaje de feedback -->
                    <div class="invalid-feedback">Por favor, seleccione una de las opciones.</div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-left gap-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
            </div>
        </form>
    </div>
            
    </div>
</div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>
</html>