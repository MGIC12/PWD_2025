<?php
include_once('../../../../Utils/funciones.php');

// Lista de usuarios registrados
$usuario1 = [
    "usuario" => "benjamin",
    "clave"   => "qwerty12345"
];
$usuario2 = [
    "usuario" => "facundo",
    "clave"   => "pena123456"
];
$usuario3 = [
    "usuario" => "juan",
    "clave"   => "qwerty"
];

$todosLosUsuarios = [$usuario1, $usuario2, $usuario3];

$cadena = '';
$bandera = false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php
    include_once('../../../structure/header.php');
    ?>

    <div class="d-flex justify-content-center align-items-center vh-100 bg-secondary">

        <div class="card bg-light text-dark p-3 mb-3 contenedor-sombra" style="max-width: 30rem;">
            <div class="card-body">
                <?php

                // Verificar si se recibieron datos por POST
                if (!empty($_POST['usuario']) && !empty($_POST['password'])) {

                    $datos = datasubmited();
                    $user = $datos['usuario'] ?? null;
                    $password = $datos['password'] ?? null;

                    foreach ($todosLosUsuarios as $unUsuario) {
                        if ($user === $unUsuario['usuario'] && $password === $unUsuario['clave']) {
                            $cadena = "<div class='alert alert-success' role='alert'>
                           <strong>Bienvenido $user</strong>
                       </div>";
                            $bandera = true;
                            break;
                        }
                    }

                    if (!$bandera) {
                        $cadena = "<div class='alert alert-warning' role='alert'>
                       <strong>Error: Usuario o contraseña incorrecto</strong>
                   </div>";
                    }
                } else {
                    $cadena = "<div class='alert alert-danger' role='alert'>
                   <strong>Error: No se recibieron datos</strong>
               </div>";
                }

                echo $cadena;
                ?>
                <div class="d-grid gap-2">
                    <a href="inicio.php" class="btn btn-outline-primary">Volver al formulario</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>
</html>