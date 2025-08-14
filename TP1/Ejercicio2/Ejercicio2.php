<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>TP1 - Ejercicio 2</h1>
    <h2>Horas de cursada</h2>
    <form action="verhoras.php" method="get">
        <label for="horas">Horas lunes</label>
        <input type="number" name="horasL" id="horasL">
        <br>
        <label for="horas">Horas martes</label>
        <input type="number" name="horasM" id="horasM">
        <br>
        <label for="horas">Horas miercoles</label>
        <input type="number" name="horasMi" id="horasMi">
        <br>
        <label for="horas">Horas jueves</label>
        <input type="number" name="horasJ" id="horasJ">
        <br>
        <label for="horas">Horas viernes</label>
        <input type="number" name="horasV" id="horasV">
        <br>
        <button type="submit">Obtener horas</button>
    </form>
</body>
</html>