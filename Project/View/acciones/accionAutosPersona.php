<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Autos asociados';
// Creo el manejador
$abmAuto = new AbmAuto();
$abmPersona = new AbmPersona();
// Obtengo los datos enviados del form
$datos = data_submitted();
// Extraigo la patente (si existe en los datos)
$nroDniPersona = $datos['nroDni'];
// Busco autos según la patente
$unaPersona = $abmPersona->buscar(['nroDni' => $nroDniPersona]);
print_r($unaPersona);
// echo $nroDniPersona;
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';

// ⬇️ Importante ⬇️
// Se podria crear una class validador en la capa control para validar los datos correctos (como se hace con js) y que se retorne un mensaje con lo que se debe modificar.
?>

<!-- Header propio -->
<header class="mt-5">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Persona con autos asociados</h4>
        </div>
    </div>
</header>
<div class="container mt-5 text-center">
    <?php if ($nroDniPersona === 'null') { ?>
        <div class="container card text-bg-danger shadow" style="max-width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Error</h5>
                <p class="card-text">No se enviaron datos</p>
            </div>
        </div>
    <?php } else { ?>
    <?php if ($unaPersona === []) { ?>
        <h4 class="mt-0 bg-danger shadow p-4">No se encontraron personas registradas en el sistema con el numero de documento: <?php echo $nroDniPersona ?></h4>
    <?php } else { 
        $listadoDeAutos = $abmAuto->buscar(['DniDuenio' => $nroDniPersona]);
    ?>
    <div class="container card text-bg-success shadow mt-n5" style="max-width: 18rem;">
        <div class="card-body">
                <h5 class="card-title">Se encontro una persona en el sistema</h5>
                <p class="card-text">Nombre: <?php echo $unaPersona[0]->getNombre(); ?></p>
                <p class="card-text mt-n3">Apellido: <?php echo $unaPersona[0]->getApellido(); ?></p>
                <p class="card-text mt-n3">Numero DNI: <?php echo $unaPersona[0]->getNroDni(); ?></p>
            </div>
    </div>
<table class="table table-striped table-hover">
    <h5 class="mt-5">Vehiculos Asociados</h5>
                <thead>
                    <tr>
                        <th class="text-center">Patente</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Modelo</th>
                        <th class="text-center">Nombre y Apellido Propietario</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($listadoDeAutos)) { 
                        foreach ($listadoDeAutos as $unAuto) { ?>
                            <tr>
                                <td class="text-center"><?php echo $unAuto->getPatente(); ?></td>
                                <td class="text-center"><?php echo $unAuto->getMarca(); ?></td>
                                <td class="text-center"><?php echo $unAuto->getModelo(); ?></td>
                                <td class="text-center">
                                    <?php
                                    echo $unaPersona[0]->getNombre();
                                    echo (" " . $unaPersona[0]->getApellido());
                                    ?>

                                </td>
                            </tr>
                        <?php } 
                    } else { ?>
                        <tr>
                            <td colspan="4" class="text-center">No hay autos asociados al numero de documento <?php echo $nroDniPersona; ?>.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    <?php } ?>
    <?php } ?>
    <div class="mt-5">
        <a href="../admin/autosPersona.php" class="btn btn-outline-primary">Volver</a>
    </div>
</div>

<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>