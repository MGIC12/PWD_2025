<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
</head>
<body>
    <h1>Ver número</h1>
    <?php
    //Obtener los números ingresados
    $num = $_POST["num"];
    $num2 = $_POST["num2"];
    
    //Verificar si el primer número es positivo, negativo o cero
    if ($num > 0){
        echo "El primer número ingresado es positivo <br>";
    } else if ($num < 0){
        echo "El primer número ingresado es negativo <br>";
    } else if ($num == 0){
        echo "El primer número ingresado es cero <br>";
    }

    //Verificar si el segundo número es positivo, negativo o cero
    if ($num2 > 0){
        echo "El segundo número ingresado es positivo <br>";
    } else if ($num2 < 0){
        echo "El segundo número ingresado es negativo <br>";
    } else if ($num2 == 0){
        echo "El segundo número ingresado es cero <br>";
    }

    echo "El primer número ingresado es: $num <br>";
    echo "El segundo número ingresado es: $num2 <br>";
    ?>
</body>
</html>