<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';


$titulo = 'Listado de personas';
$abmPersona = new AbmPersona();
$listadoDePersonas = $abmPersona->buscar(null); // sin filtros, trae todos
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>

<!-- Header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h2>Listado de personas</h2>
        </div>
    </div>
</header>

<div class="container mt-2">
    <section class="py-2">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Nombre y Apellido</th>
                        <th class="text-center">Numero DNI</th>
                        <th class="text-center">Fecha de nacimiento</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Domicilio</th>
                        <th class="text-center">Autos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($listadoDePersonas)) { 
                        foreach ($listadoDePersonas as $unaPersona) { ?>
                            <tr>
                                <td class="text-center"><?php echo $unaPersona->getNombre(); echo (" " . $unaPersona->getApellido()); ?></td>
                                <td class="text-center"><?php echo $unaPersona->getNroDni(); ?></td>
                                <td class="text-center"><?php echo $unaPersona->getFechaNac(); ?></td>
                                <td class="text-center"><?php echo $unaPersona->getTelefono(); ?></td>
                                <td class="text-center"><?php echo $unaPersona->getDomicilio(); ?></td>
                                
                                <!-- Boton para verAutos, dependiendo el dni -->
                                <td class="text-center">
                                    <a href="autosPersona.php?dni=<?php echo urlencode($unaPersona->getNroDNI()); ?>" class="btn btn-primary btn-sm">
                                        Ver Autos
                                    </a>
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
            <a class="btn btn-primary" href="autosPersona.php">Autos Persona</a>
        </div>
    </section>
</div>

<?php
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>
