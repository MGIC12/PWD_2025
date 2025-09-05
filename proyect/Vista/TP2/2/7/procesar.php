<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styleProcesar.css">
</head>
<body class="d-flex flex-column min-vh-100">

 <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>
    <div class="resultado-contenedor">
        <h1 class="titulo">Resultado de la Operación</h1>
        <div class="resultado-box">
            <?php 
                if ($_POST){
                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];
                    $operacion = $_POST['operacion'];
                    switch ($operacion) {
                        case 'suma':
                            $resultado = $num1+$num2;
                        break;
                        case 'resta':
                            $resultado = $num1-$num2;
                        break;
                        case 'multiplicacion':
                            $resultado = $num1*$num2;
                        break;
                        case 'division':
                            if ($num2 == 0){
                                $resultado = 'Operación inválida: no se puede dividir por 0';
                            } else {
                                $resultado = $num1/$num2;
                            }
                        break;
                    }
                    echo "<p>El resultado de la <strong>$operacion</strong> entre <strong>$num1</strong> y <strong>$num2</strong> es:</p>";
                    echo "<h2 class='valor-resultado'>$resultado</h2>";
                } else {
                    echo "<p class='error'>No se recibieron datos</p>";
                }
            ?>
        </div>
        <a href="Inicio.php" class="btn-volver">⬅ Volver al inicio</a>
    </div>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>
</html>
