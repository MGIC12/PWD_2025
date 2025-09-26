<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Persona Ingresada';
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/Controller/validadores/validadorNuevaPersona.php';
$validador = new Validador();
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Peticion para registrar una persona</h4>
        </div>
    </div>
</header>

<?php
    $datos = data_submitted();

    $nombre = $datos['nombre'];
    $validador->validacionNombre($nombre);

    $apellido = $datos['apellido'];
    $validador->validacionApellido($apellido);

    $nroDni = $datos['nroDni'];
    $validador->validacionNroDni($nroDni);
    
    $fechaNacimiento = $datos['fechaNacimiento'];
    $validador->validacionFechaNacimiento($fechaNacimiento);

    $nroTelefono = $datos['numTelefono'];
    $validador->validacionNumeroTelefono($nroTelefono);

    $domicilio = $datos['domicilio'];
    $validador->validacionDomicilio($domicilio);

    $datosEnArray = [$nombre,$apellido,$nroDni,$fechaNacimiento,$nroTelefono,$domicilio];
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">

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
    <?php $esValido = $abmPersona->alta($datos);
    if ($esValido){ ?>
    <div class="card-body bg-success text-white text-center rounded-3">
            <h3>Operacion exisota</h3>
            <?php 
                $message = 'La persona se registro correctamente en el sistema.';
            ?>
    <?php } else { ?>
    <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>Operacion Fallida</h3>
            <?php 
                $message = 'Hubo un error al registrar la persona en el sistema, por favor corrobore los datos e intente nuevamente.';
            ?>
    <?php } ?>
            <?php echo $message; ?>
        </div>
<?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a href="../admin/nuevaPersona.php" class="btn btn-outline-primary">Volver</a>
            <a href="../admin/listaPersonas.php" class="btn btn-outline-primary">Ver listado de personas</a>
        </div>
    </div>
</div>
<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>