<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>TP1 - Ejercicio 5</h1>
    <form action="verdatos3.php" method="get">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <br><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <br><br>
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad">
        <br><br>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion">
        <br><br>
        <label for="estudios">Estudios: </label>
        <br>
        <input type="radio" name="estudios" id="estudiosN" value="N">No tengo estudios
        <br><br>
        <input type="radio" name="estudios" id="estudiosP" value="P">Tengo estudios primarios
        <br><br>
        <input type="radio" name="estudios" id="estudiosS" value="S">Tengo estudios secundarios
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>