<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';


$titulo = 'Busqueda de Autos';
$abmAuto = new AbmAuto();
$listadoDeAutos = $abmAuto->buscar(null); // sin filtros, trae todos
$abmPersona = new AbmPersona();
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<link rel="stylesheet" href="../assets/style/styleValidaciones.css">
<main class="container mt-5 d-flex flex-column min-vh-100">
        <section class="card shadow p-4">
            <form class="needs-validation" novalidate action="../acciones/accionBuscarAuto.php" id="loginForm" method="post" enctype="multipart/form-data">
                            <h2 class="mb-4 text-primary">Busqueda de auto</h2>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="validacionTitulo" class="form-label">Patente (Formato: AAA-123)</label>
                                    <input type="text" id="validacionPatente" name="patente" class="form-control" required>
                                    <div class="invalid-feedback" id="patenteInvalid"></div>
                                    <div class="valid-feedback" id="patenteValid"></div>
                                </div>
                <div class="d-flex gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>            
        </form>
    </section>
    <!-- Validador para formularios -->
    <script src="../assets/function/validadorBuscarAuto.js"></script>
</main>
<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>