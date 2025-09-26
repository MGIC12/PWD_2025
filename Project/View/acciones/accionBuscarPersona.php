<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Modificar persona';
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/Controller/validadores/validadorBuscarPersona.php';
$validador = new Validador();
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Peticion para modificar una persona</h4>
        </div>
    </div>
</header>

<?php
    $datos = data_submitted();

    $nroDniDuenio = $datos['nroDniDuenio'];
    $validador->validacionNroDniDuenio($nroDniDuenio);
?>

<div class="container mt-5 d-flex flex-column">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow p-4">

<?php if ($validador->hayErrores()){ ?>
    <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>error</h3>
                <?php 
                $errores = $validador->getErrores();
                // print_r($errores);
                $cantErrores = count($errores);
                $i = 0;
                while ($i<$cantErrores) {
                    echo ($errores[$i] . "<br>");
                    $i++;
                }
                ?>
    </div>
<?php } else { ?>
    <?php 
    $seEncontroPersona = $abmPersona->buscar(['nroDni' => $datos['nroDniDuenio'] ]);
    if (!empty($seEncontroPersona)) {
        // print_r($seEncontroPersona);
        $personaEncontrada = $seEncontroPersona[0];
            // NroDni
            // Apellido
            // Nombre
            // fechaNac
            // Telefono
            // Domicilio
            $nombrePersona = $personaEncontrada->getNombre();
            $apellidoPersona = $personaEncontrada->getApellido();
            $fechaNacimientoPersona = $personaEncontrada->getFechaNac();
            $telefonoPersona = $personaEncontrada->getTelefono();
            $domicilioPersona = $personaEncontrada->getDomicilio();
            ?>
                <form class="needs-validation" novalidate action="../acciones/ActualizarDatosPersona.php" id="loginForm" method="get" enctype="multipart/form-data">
            <h2 class="mb-4 text-primary">Ingrese los datos</h2>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="validacionNroDniDuenio" class="form-label">Numero de DNI:</label>
                    <input type="text" id="validacionNroDniDuenio" name="nroDniDuenio" class="form-control" value="<?php echo $nroDniDuenio ?>" readonly required>
                    <div class="invalid-feedback" id="nroDniDuenioInvalid"></div>
                    <div class="valid-feedback" id="nroDniDuenioValid"></div>
                </div>
            </div>
            <!-- Nombre y Apellido (2 por fila en md para arriba) -->
                <div class="row mb-3">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" 
                        value="<?php echo $nombrePersona; ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" 
                        value="<?php echo $apellidoPersona; ?>" required>
                </div>
                </div>

    <!-- Fecha de nacimiento y Teléfono -->
    <div class="row mb-3">
      <div class="col-md-6 mb-3 mb-md-0">
        <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" 
               value="<?php echo $fechaNacimientoPersona; ?>" required>
      </div>
      <div class="col-md-6">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" class="form-control" 
               value="<?php echo $telefonoPersona; ?>" required>
      </div>
    </div>

    <!-- Domicilio - ocupa toda la fila -->
    <div class="row mb-3">
      <div class="col-12">
        <label for="domicilio" class="form-label">Domicilio:</label>
        <input type="text" id="domicilio" name="domicilio" class="form-control" 
               value="<?php echo $domicilioPersona; ?>" required>
      </div>
    </div>

    <!-- Botón -->
    <div class="row">
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </form>
    <?php
    } else {
    ?>
        <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>No se encontró ninguna persona registrada en el sistema.</h3>
            <h5 class="my-5">Puede ingresar la persona e intentar nuevamente.</h5>
            <a href="../admin/nuevaPersona.php" class="btn btn-outline-primary">Ingresar persona</a>
        </div>
    <?php
} ?>
<?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="../admin/buscarPersona.php" class="btn btn-outline-primary mb-5">Volver</a>
            <!-- <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a> -->
        </div>
    </div>
</div>
<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>