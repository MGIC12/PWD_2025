<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>
    <form method="post" action="procesar.php">
        <div class="campo">
            <label for="nombre">Nombre:</label> 
            <input type="text" id="nombre" name="nombre" required> 
        </div>

        <div class="campo">
            <label for="apellido">Apellido:</label> 
            <input type="text" id="apellido" name="apellido" required> 
        </div>

        <div class="campo">
            <label for="edad">Edad:</label> 
            <input type="number" id="edad" name="edad" required> 
        </div>

        <div class="campo estudios">
            <label>Estudios:</label>
            <div class="opcion">
                <input type="radio" id="no_estudia" name="estudios" value="0" required>
                <label for="no_estudia">No estoy estudiando actualmente</label>
            </div>
            <div class="opcion">
                <input type="radio" id="estudia" name="estudios" value="1" required>
                <label for="estudia">Me encuentro estudiando</label>
            </div>
        </div>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpiar">
    </form>
</body>

</html>