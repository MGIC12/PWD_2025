<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Style.css">
</head>
<body>
    <main class="container mt-5">
        <section class="card shadow p-4">
            <form class="needs-validation" novalidate action="procesar.php" id="fileform" method="post" enctype="multipart/form-data">
                <h2 class="mb-4 text-primary">📄 Subir archivo</h2>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                    <div id="errorArchivo" class="invalid-feedback"></div>
                    <div id="aciertoArchivo" class="valid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
                <button type="reset" class="btn btn-secondary">Borrar</button>
            </form>
            <br>
            <a href="../index.php" class="btn btn-outline-dark">Volver al index</a>
        </section>
    </main>
</body>
    <!-- <script src="../../scriptBootstrap.js"></script> -->
    <script src="scriptValidacionForm.js"></script>
</html>