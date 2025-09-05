<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Completo</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
      <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>
    <div class="container mt-5">
        <form id="formCompleto" class="row g-3 needs-validation" novalidate method="post" action="../../../../Control/TP2/2/6/procesar.php">

            <h1>Datos Personales</h1>
            <hr>

            <!-- Nombre -->
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
                <div class="invalid-feedback">Por favor ingrese un nombre válido (solo letras y espacios).</div>
            </div>

            <!-- Apellido -->
            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
                <div class="invalid-feedback">Por favor ingrese un apellido válido (solo letras y espacios).</div>
            </div>

            <!-- Edad -->
            <div class="col-md-4">
                <label for="edad" class="form-label">Edad:</label>
                <input type="number" name="edad" id="edad" class="form-control" required min="0">
                <div class="invalid-feedback">Por favor ingrese una edad válida.</div>
            </div>

            <!-- Dirección -->
            <div class="col-md-8">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
                <div class="invalid-feedback">Por favor ingrese su dirección.</div>
            </div>

            <!-- Nivel de Estudios -->
            <div class="col-12">
                <h3>Nivel de estudios</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="1estudios" name="estudios" value="No tiene estudios" required>
                    <label class="form-check-label" for="1estudios">No tiene estudios</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="2estudios" name="estudios" value="Estudios primarios" required>
                    <label class="form-check-label" for="2estudios">Estudios primarios</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="3estudios" name="estudios" value="Estudios secundarios" required>
                    <label class="form-check-label" for="3estudios">Estudios secundarios</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
            </div>

            <!-- Sexo -->
            <div class="col-12">
                <h3>Sexo</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sexoM" name="sexo" value="Masculino" required>
                    <label class="form-check-label" for="sexoM">Masculino</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sexoF" name="sexo" value="Femenino" required>
                    <label class="form-check-label" for="sexoF">Femenino</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="sexoO" name="sexo" value="Otro" required>
                    <label class="form-check-label" for="sexoO">Otro</label>
                    <div class="invalid-feedback">Seleccione una opción.</div>
                </div>
            </div>

            <!-- Deportes -->
            <div class="col-12">
                <h3>Deportes que practica</h3>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="futbol" name="deportes[]" value="Fútbol">
                    <label class="form-check-label" for="futbol">Fútbol</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="basket" name="deportes[]" value="Basket">
                    <label class="form-check-label" for="basket">Basket</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="tenis" name="deportes[]" value="Tenis">
                    <label class="form-check-label" for="tenis">Tenis</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="voley" name="deportes[]" value="Voley">
                    <label class="form-check-label" for="voley">Voley</label>
                </div>
            </div>

            <!-- Botones -->
            <div class="col-12 d-flex gap-2 mt-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-secondary" type="reset">Limpiar</button>
            </div>

        </form>
    </div>

    <script src="../../../../Frameworks/bootstrap.min.js"></script>
    <script src="../scripts.js"></script>

    <script>
        // Validaciones específicas para nombre, apellido y edad
        (() => {
            const nombre = document.getElementById('nombre');
            const apellido = document.getElementById('apellido');
            const edad = document.getElementById('edad');

            const soloLetras = e => {
                e.value = e.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñ\s]/g, '');
            };

            // Validación en tiempo real
            [nombre, apellido].forEach(campo => {
                campo.addEventListener('input', () => soloLetras(campo));
            });

            // Validación al enviar el formulario
            const form = document.getElementById('formCompleto');
            form.addEventListener('submit', e => {
                const regexLetras = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

                if (!regexLetras.test(nombre.value)) {
                    nombre.setCustomValidity("Solo letras y espacios permitidos");
                } else {
                    nombre.setCustomValidity("");
                }

                if (!regexLetras.test(apellido.value)) {
                    apellido.setCustomValidity("Solo letras y espacios permitidos");
                } else {
                    apellido.setCustomValidity("");
                }

                if (!/^\d{1,3}$/.test(edad.value) || edad.value <= 0) {
                    edad.setCustomValidity("Edad debe ser un número positivo de hasta 3 dígitos");
                } else {
                    edad.setCustomValidity("");
                }
            });
        })();
    </script>

        <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>


</body>

</html>