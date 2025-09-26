<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Listado de Autos';
$abmAuto = new AbmAuto();
$listadoDeAutos = $abmAuto->buscar(null); // sin filtros, trae todos
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>

<!-- Header propio -->
<header class="py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h2>Listado de Autos</h2>
        </div>
    </div>
</header>

<div class="container mt-2">
    <section class="py-2">
        <div class="row">
            <table class="table table-striped table-hover">
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
                                    $dniPropietario = $unAuto->getNroDniPropietario();
                                    $personas = $abmPersona->buscar(['nroDni' => $dniPropietario]);
                                    if (!empty($personas)) {
                                        // print_r($personas);
                                        $persona = $personas[0]; // primer Persona
                                        echo $persona->getNombre(); // se imprime el nombre
                                        echo (" " . $persona->getApellido()); // Se imprime el apellido
                                    } else {
                                        echo "No tiene";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } 
                    } else { ?>
                        <tr>
                            <td colspan="4" class="text-center">No hay autos cargados.</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<?php
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>
