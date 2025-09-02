<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - PWD 2025</title>
  <link rel="stylesheet" href="./Frameworks/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="Vista/TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="container text-center py-5">
    <h1 class="display-4 fw-bold text-primary">Bienvenidos a PWD 2025</h1>
    <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
      🚀 Trabajos Prácticos y equipo de desarrollo
    </p>
    <div class="mt-4">
      <a href="#integrantes" class="btn btn-primary btn-lg shadow">Ver integrantes</a>
    </div>
  </header>

  <!-- Integrantes -->
  <main id="integrantes" class="container text-center my-5">
    <h2 class="fw-bold text-secondary mb-4">Integrantes</h2>
    <div class="row g-4">
      
      <div class="col-sm-6 col-lg-3">
        <div class="card h-100 shadow border-0 bg-white">
          <img class="card-img-top" src="https://avatars.githubusercontent.com/u/150484970?v=4" alt="Facundo Ledesma" loading="lazy">
          <div class="card-body">
            <h5 class="card-title text-primary fw-bold">Facundo Ledesma</h5>
            <p class="card-text text-muted">@FacuLedesmaBertalot</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card h-100 shadow border-0 bg-white">
          <img class="card-img-top" src="https://avatars.githubusercontent.com/u/68124872?v=4" alt="Mariano Infante" loading="lazy">
          <div class="card-body">
            <h5 class="card-title text-success fw-bold">Mariano Infante</h5>
            <p class="card-text text-muted">@MGIC12</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card h-100 shadow border-0 bg-white">
          <img class="card-img-top" src="https://avatars.githubusercontent.com/u/149085169?v=4" alt="Matias Bacsay" loading="lazy">
          <div class="card-body">
            <h5 class="card-title text-danger fw-bold">Matias Bacsay</h5>
            <p class="card-text text-muted">@tebacs</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="card h-100 shadow border-0 bg-white">
          <img class="card-img-top" src="https://avatars.githubusercontent.com/u/206235917?v=4" alt="Benjamín de la Fuente" loading="lazy">
          <div class="card-body">
            <h5 class="card-title text-warning fw-bold">Benjamín de la Fuente</h5>
            <p class="card-text text-muted">@Ibenjamindlf</p>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-primary text-center text-white py-3 mt-auto shadow">
    <small>&copy; 2025 PWD - Todos los derechos reservados</small>
  </footer>

  <script src="./Frameworks/bootstrap.bundle.min.js"></script>
</body>
</html>
