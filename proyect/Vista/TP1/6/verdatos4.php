<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
    
<?php
// Navbar
  
  include_once('../../structure/header.php');
  

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];
$futbol = isset($_GET['futbol']) ? $_GET['futbol'] : '';
$basquetbol = isset($_GET['basquetbol']) ? $_GET['basquetbol'] : '';
$tenis = isset($_GET['tenis']) ? $_GET['tenis'] : '';
$voley = isset($_GET['voley']) ? $_GET['voley'] : '';

$cantidad_deportes = 0;
if ($futbol != '') $cantidad_deportes++;
if ($basquetbol != '') $cantidad_deportes++;
if ($tenis != '') $cantidad_deportes++;
if ($voley != '') $cantidad_deportes++;

echo "$nombre $apellido tiene $edad años y vive en $direccion. Practica $cantidad_deportes deportes.";


?>
<!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>

</html>