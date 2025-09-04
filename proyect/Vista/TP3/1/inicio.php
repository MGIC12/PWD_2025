<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../Style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="../../TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="../../TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link active fw-bold" href="./../index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
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
        </section>
    </main>
</body>
    <!-- <script src="../../scriptBootstrap.js"></script> -->
    <script src="scriptValidacionForm.js"></script>
</html>