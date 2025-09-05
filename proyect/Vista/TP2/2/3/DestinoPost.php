<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Destino POST</title>
    <link rel="stylesheet" href="styleDestino.css">
    <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
     <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>
    <div class="container">
        <h1 class="titulo">Datos recibidos (POST)</h1>
        <?php
        if ($_POST){
            $nombre = $_POST['nombre_form'];
            $apellido = $_POST['apellido_form'];
            $edad = $_POST['edad_form'];
            $direccion = $_POST['direccion_form'];
            $cadena = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
            echo "<div class='resultado'><p>$cadena</p></div>";
        } else {
            echo "<p class='error'>No se encontraron datos</p>";
        }
        ?>
        <a href="Inicio.php" class="volver">⬅ Volver al formulario</a>
    </div>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>

</html>

