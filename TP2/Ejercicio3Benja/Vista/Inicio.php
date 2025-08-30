<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Validacion bootstrap</h1>
    <?php ?>
    <!-- Para cambiar entre GET y POST, modificar los atributos method y action -->
    <div class="contenedor-form">
        <h2>Datos personales</h2>
        <form class="row g-3 needs-validation" novalidate id="form3" name="form3" method="post" action="DestinoPost.php">
            <!-- Campo nombre -->
            <div class="col-md-4 input-form input-nombre">
                <label for="validacionNombre" class="form-label">Nombre</label>  
                <input type="text" class="form-control" name="nombre_form"  id="validacionNombre" required>
                <div class="invalid-feedback">
                    Por favor, ingrese un nombre valido.
                </div>
            </div>
            <!-- Campo apellido -->
            <div class="col-md-4 input-form input-apellido">
                <label for="validacionApellido" class="form-label">Apellido</label>  
                <input type="text" class="form-control" name="apellido_form"  id="validacionApellido" required>
                <div class="invalid-feedback">
                    Por favor, ingrese un apellido valido.
                </div>
            </div>
            <!-- Campo edad -->
            <div class="col-md-4 input-form input-edad">
                <label for="validacionEdad" class="form-label">Edad</label>  
                <input type="number" class="form-control" name="edad_form"  id="validacionEdad" required>
                <div class="invalid-feedback">
                    Por favor, ingrese su edad.
                </div>
            </div>
            <!-- Campo direccion -->
            <div class="col-md-4 input-form input-edad">
                <label for="validacionDireccion" class="form-label">Direccion</label>  
                <input type="text" class="form-control" name="direccion_form"  id="validacionDireccion" required>
                <div class="invalid-feedback">
                    Por favor, ingrese su direccion.
                </div>
            </div>
            <!-- Botones -->
            <div class="col-12 d-flex justify-content-left gap-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>