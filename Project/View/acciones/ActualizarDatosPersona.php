<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Persona modificada';
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/Controller/validadores/validadorModificarPersona.php';
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
    $validador->validacionNroDni($nroDniDuenio);

    $nombrePersonaActualizado = $datos['nombre'];
    $validador->validacionNombre($nombrePersonaActualizado);

    $apellidoPersonaActualizado = $datos['apellido'];
    $validador->validacionApellido($apellidoPersonaActualizado);

    $fechaNacimientoPersonaActualizado = $datos['fechaNacimiento'];
    $validador->validacionFechaNacimiento($fechaNacimientoPersonaActualizado);

    $telefonoPersonaActualizado = $datos['telefono'];
    $validador->validacionNumeroTelefono($telefonoPersonaActualizado); 

    $domicilioPersonaActualizado = $datos['domicilio'];
    $validador->validacionDomicilio($domicilioPersonaActualizado);
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
    if (isset($datos['nroDniDuenio'])) {
    $datos['nroDni'] = $datos['nroDniDuenio'];
    unset($datos['nroDniDuenio']);
    }
    $seModificoPersona = $abmPersona->modificacion($datos);
    if ($seModificoPersona) { ?>
        <div class="card-body bg-success text-white text-center rounded-3">
            <h3>La persona registrada en el sistema fue modificada.</h3>
            <a href="../admin/listaPersonas.php" class="btn btn-outline-primary">Ver listado de personas</a>
        </div>
    <?php } else { ?>
        <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>Hubo un error al modificar la persona registrada en el sistema.</h3>
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