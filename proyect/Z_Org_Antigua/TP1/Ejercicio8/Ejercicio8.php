<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Cine Cinem@s</title>
</head>
<body>
    <h1>Cine Cinem@s</h1>
    <h2>Calcular precio de entrada</h2>
    <form method="get">
        <label for="edad">Edad: </label>
        <input type="number" name="edad" id="edad" required>
        <br><br>
        <label for="estudiante">Eres estudiante?</label>
        <input type="radio" name="estudiante" value="si" id="estudiante">Si
        <input type="radio" name="estudiante" value="no" id="estudiante">No
        <br><br>
        <input type="submit" value="Enviar">
        <input type="button" value="Borrar" onclick="location.href='Ejercicio8.php'";>
    </form>
    <?php
    if (isset($_GET["edad"]) && isset($_GET["estudiante"])) {
        $edad = intval($_GET["edad"]);
        $estudiante = $_GET["estudiante"];

        if ($estudiante == "si" && $edad < "12"){
        echo "<br>El precio de la entrada es de: <b>160</b>";
    } else if ($estudiante == "si" && $edad >= "12"){
        echo "<br>El precio de la entrada es de: <b>180</b>";
    } else {
        echo "<br>El precio de la entrada es de: <b>300</b>";
    }

    } else {
        echo "<br>Esperando datos...";
    }
?>
</body>
</html>