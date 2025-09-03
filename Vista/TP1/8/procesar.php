<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleP8.css">
</head>
<body>
    <?php
    include_once './../../../Control/TP1/8/C_Cine.php';
    if ($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $estudiante = $_POST['estudios'];
        
        echo '<div class="resultado">';
        echo "<h2>Bienvenido $nombre $apellido</h2>";
        
        $objC_Cine = new C_Cine();
        $precio = $objC_Cine->calcular_precio_entrada($_POST);

        echo "<p>El precio de su entrada es de: <strong>$$precio</strong></p>";
        echo '<a href="Inicio.php">Volver al formulario</a>';
        echo '</div>';
    } else {
        echo '<div class="resultado"><p>No se recibieron datos</p><a href="Inicio.php">Volver al formulario</a></div>';
    }
    ?>
</body>
</html>