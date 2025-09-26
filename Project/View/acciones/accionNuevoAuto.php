<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Auto ingresado';
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/Controller/validadores/validadorNuevoAuto.php';
$validador = new Validador();
$abmAuto = new AbmAuto();
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Peticion para registrar un auto</h4>
        </div>
    </div>
</header>

<?php
    $datos = data_submitted();

    $patente = $datos['patente'];
    $validador->validacionPatente($patente);

    $marca = $datos['marca'];
    $validador->validacionMarca($marca);

    $modelo = $datos['modelo'];
    $validador->validacionModelo($modelo);
    
    $nroDniDuenio = $datos['nroDniDuenio'];
    $validador->validacionNroDniDuenio($nroDniDuenio);

    // $datosEnArray = [$nombre,$apellido,$nroDni,$fechaNacimiento,$nroTelefono,$domicilio];
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
    <?php $seEncontro = $abmPersona->buscar(['nroDni' => $datos['nroDniDuenio'] ]); 
    if (!empty($seEncontro)) {
        $seIngreso = $abmAuto->alta($datos);
        if ($seIngreso){
            ?>
                <div class="card-body bg-success text-white text-center rounded-3">
                <h3 class="my-4">Se ingreso el auto correctamente.</h3>
                <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a>
                </div>
            <?php
        } else {
            ?>
                <div class="card-body bg-danger text-white text-center rounded-3">
                <h3>No se ingreso el auto.</h3>
                <!-- <h5 class="my-5">Ingrese la persona e intente nuevamente ingresar el auto.</h5>
                <a href="../admin/nuevaPersona.php" class="btn btn-outline-primary">Ingresar persona</a> -->
                </div>
            <?php
        }
    ?>
    <?php
    } else {
    ?>
        <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>No se encontró ninguna persona.</h3>
            <h5 class="my-5">Ingrese la persona e intente nuevamente ingresar el auto.</h5>
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
            <a href="../admin/nuevoAuto.php" class="btn btn-outline-primary">Volver</a>
            <!-- <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a> -->
        </div>
    </div>
</div>
<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>