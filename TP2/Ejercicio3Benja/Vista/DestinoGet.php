<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Destino GET</title>
</head>
<body>
    <h1>GET</h1>
    <?php
    if ($_GET){
        $nombre = $_GET['nombre_form'];
        $apellido = $_GET['apellido_form'];
        $edad = $_GET['edad_form'];
        $direccion = $_GET['direccion_form'];
        $cadena = (
                    "
                    Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion
                    "
        );
        echo "<h3>$cadena</h3>";
    } else {
        echo ("No se encontraron datos");
    }
    ?>
    <a href="Inicio.php">Volver al formulario</a>
</body>
</html>

