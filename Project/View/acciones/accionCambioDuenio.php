<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Auto ingresado';
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/Controller/validadores/validadorCambioDuenio.php';
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

    $nroDniDuenio = $datos['nroDniDuenio'];
    $validador->validacionNroDniDuenio($nroDniDuenio);
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
    <?php 
    $seEncontroPersona = $abmPersona->buscar(['nroDni' => $datos['nroDniDuenio'] ]);
    $seEncontroAuto = $abmAuto->buscar(['patente' => $datos['patente'] ]);
    if (!empty($seEncontroPersona) && !empty($seEncontroAuto)) {
        // $seIngreso = $abmAuto->alta($datos);
        // print_r($seEncontroAuto);
        $autoEncontrado = $seEncontroAuto[0];
        $dniPropietarioAutoEncontrado = $autoEncontrado->getNroDniPropietario();
        if ($dniPropietarioAutoEncontrado == $nroDniDuenio){
            ?>
                <div class="card-body bg-success text-white text-center rounded-3">
                <h3 class="my-4">El auto con patente <?php echo $patente ?> ya tiene vinculado a la persona con numero DNI: <?php echo $nroDniDuenio?>.</h3>
                <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a>
                </div>
            <?php
        } else {
                $param = [
                    'patente' => $patente,
                    'marca' => $autoEncontrado->getMarca(),   // traigo la marca actual
                    'modelo' => $autoEncontrado->getModelo(), // traigo el modelo actual
                    'nroDniDuenio' => $nroDniDuenio        // pongo el DNI nuevo
                ];
                // $abmAuto->modificacion($param);
                $seModifico = $abmAuto->modificacion($param);
                    if ($seModifico){ ?>
                        <div class="card-body bg-success text-white text-center rounded-3">
                        <h3>El auto se modifico correctamente.</h3>
                        <!-- <h5 class="my-5">Ingrese la persona e intente nuevamente ingresar el auto.</h5> -->
                        <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a>
                        </div>
                    <?php } else { ?>
                        <div class="card-body bg-danger text-white text-center rounded-3">
                        <h3>Hubo un error en la modificacion del auto.</h3>
                        <!-- <h5 class="my-5">Ingrese la persona e intente nuevamente ingresar el auto.</h5>
                        <a href="../admin/nuevaPersona.php" class="btn btn-outline-primary">Ingresar persona</a> -->
                        </div>
                    <?php } ?>
            <?php
        }
    ?>
    <?php
    } else {
    ?>
        <div class="card-body bg-danger text-white text-center rounded-3">
            <h3>No se encontró ninguna persona o ningun auto en el sistema.</h3>
            <h5 class="my-5">Ingrese la persona o el auto e intente nuevamente modificar el auto.</h5>
            <a href="../admin/nuevaPersona.php" class="btn btn-outline-primary">Ingresar persona</a>
            <a href="../admin/nuevoAuto.php" class="btn btn-outline-primary">Ingresar auto</a>
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
            <a href="../admin/CambioDuenio.php" class="btn btn-outline-primary">Volver</a>
            <!-- <a href="../admin/administrarAutos.php" class="btn btn-outline-primary">Ver listado de autos</a> -->
        </div>
    </div>
</div>
<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>