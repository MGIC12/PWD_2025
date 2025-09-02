<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>TP1 - Ejercicio 3</h1>
    <form action="verdatos.php" method="post">
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
        <input type="submit" value="Enviar">
    </form>
</body>
</html>