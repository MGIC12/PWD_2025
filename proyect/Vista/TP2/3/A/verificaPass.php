<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="contenedor-mensaje d-flex flex-column min-vh-100">
        <?php
            // Lista de usuarios registrados
            $usuario1 = [
                "usuario" => "benjamin",
                "clave"   => "12345"
            ];
            $usuario2 = [
                "usuario" => "maria",
                "clave"   => "abcde"
            ];
            $usuario3 = [
                "usuario" => "juan",
                "clave"   => "qwerty"
            ];

            $todosLosUsuarios = [$usuario1, $usuario2, $usuario3];

            // Verificar si se recibieron datos por POST
            if (!empty($_POST['usuario']) && !empty($_POST['password'])) {

                $user     = $_POST['usuario'];
                $password = $_POST['password'];

                $cantUsuarios = count($todosLosUsuarios);
                $bandera = false;
                $cadena = '';

                $i = 0;
                while ($i < $cantUsuarios && !$bandera) {
                    $unUsuario = $todosLosUsuarios[$i];
                    $usuarioUnUsuario = $unUsuario['usuario'];
                    $passUnUsuario    = $unUsuario['clave'];

                    if ($user === $usuarioUnUsuario && $password === $passUnUsuario) {
                        $cadena = "<div class='feedback-valid'><p>Bienvenido $usuarioUnUsuario</p></div>";
                        $bandera = true;
                    }
                    $i++;
                }

                if (!$bandera) {
                    $cadena = "<div class='feedback-error'><p>Error: usuario o clave incorrectos</p></div>";
                }

                echo $cadena;

            } else {
                echo '<div class="feedback-error"><p>No se recibieron datos</p></div>';
            }
        ?>
        <div class="volverAlogin">
            <a href="inicio.php">Volver al formulario</a>
        </div>

        <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

    </div>
</body>
</html>