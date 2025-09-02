<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
    <title>Ejercicio 1 - TP 3</title>
</head>
<body class="container bg-secondary">
    <h1 class="text-center mt-5 fw-bold">Subir Archivo</h1>
    <div class="container mt-5 bg-dark shadow-lg rounded-3 p-4" data-bs-theme="dark">
    <form action="../../../Control/TP3/1Marian/ControladorArchivo.php" method="post" enctype="multipart/form-data">
        <label for="archivo" class="form-label text-white fw-bold">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label>
        <input type="file" name="archivo" id="archivo" class="form-control" required>
        <button type="submit" class="btn btn-outline-success mt-3">Subir archivo</button>
    </form>
    </div>
</body>
</html>