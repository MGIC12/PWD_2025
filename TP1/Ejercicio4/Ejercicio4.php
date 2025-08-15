<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>TP1 - Ejercicio 4</h1>
    <form action="verdatos2.php" method="get">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" required>
        <br><br>
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" required>
        <br><br>
        <label for="direccion">Dirección: </label>
        <input type="text" name="direccion" id="direccion" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>