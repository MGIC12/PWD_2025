<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="../../../../index.php">PWD 2025</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="../../../../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="Vista/TP1/index.php">TP 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="Vista/TP2/index.php">TP 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="Vista/TP3/index.php">TP 3</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <h1>TP1 - Ejercicio 2</h1>
    <hr>
    <h2>Horas de cursada PWD</h2>
    <form action="verhoras.php" method="get">
        <label for="horas">Horas Lunes: </label>
        <input type="number" name="horasL" id="horasL">
        <br><br>
        <label for="horas">Horas Martes: </label>
        <input type="number" name="horasM" id="horasM">
        <br><br>
        <label for="horas">Horas Miércoles: </label>
        <input type="number" name="horasMi" id="horasMi">
        <br><br>
        <label for="horas">Horas Jueves: </label>
        <input type="number" name="horasJ" id="horasJ">
        <br><br>
        <label for="horas">Horas Viernes: </label>
        <input type="number" name="horasV" id="horasV">
        <br><br>
        <button type="submit">Obtener horas por día</button>
    </form>
</body>

</html>