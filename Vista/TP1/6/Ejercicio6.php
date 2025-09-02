<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <h1>TP1 - Ejercicio 6</h1>
    <form action="verdatos4.php" method="get">
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
        <label for="deporte">Deporte favorito: </label>
        <input type="checkbox" name="futbol" value="futbol" id="futbol"> Futbol
        <input type="checkbox" name="basquetbol" value="basquetbol" id="basquetbol"> Basquetbol
        <input type="checkbox" name="tenis" value="tenis" id="tenis"> Tenis
        <input type="checkbox" name="voley" value="voley" id="voley"> Voley
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>