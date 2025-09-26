<?php 
    $titulo = "Inicio - PWD 2025";
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/Project/View/components/header.php';
?>

<link rel="stylesheet" href="<?php echo $BASE_URL; ?>Project/View/assets/style/styleCarrusel.css">

  <!-- Header propio -->
  <header class="container text-center py-5">
    <h1 class="display-4 fw-bold text-primary">Trabajo Práctico N°4</h1>
    <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
      📝 Resolución de ejercicios
    </p>
  </header>

  <!-- Contenido principal -->
  <main class="container text-center">

  <div class="container my-5">
        <h1 class="text-center mb-4 text-primary">Gestión de Autos y Personas</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Ver Autos</h5>
                        <p class="card-text">Consulta el listado completo de autos con sus respectivos dueños.</p>
                        <a href="../admin/administrarAutos.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Listar Personas</h5>
                        <p class="card-text">Visualiza todas las personas registradas en el sistema, a su vez los autos que tiene en posesión.</p>
                        <a href="View/listarPersonas.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Nueva Persona</h5>
                        <p class="card-text">Agrega una nueva persona al sistema completando el formulario.</p>
                        <a href="View/nuevaPersona.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Nuevo Auto</h5>
                        <p class="card-text">Registra un nuevo auto y asígnale un dueño.</p>
                        <a href="View/nuevoAuto.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Cambio de Dueño</h5>
                        <p class="card-text">Realiza la transferencia de un auto a un nuevo propietario.</p>
                        <a href="View/cambioDuenio.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title text-primary">Buscar Persona</h5>
                        <p class="card-text">Busca una persona específica por DNI y gestiona sus datos.</p>
                        <a href="View/buscarPersona.php" class="btn btn-primary mt-auto">Ir</a>
                    </div>
                </div>
            </div>

        </div>
    </div>




  </main>

<!-- Footer -->
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/Project/View/components/footer.php';
?>

