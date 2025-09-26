<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Buscar Persona';
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h2>Ingresar numero de DNI</h2>
        </div>
    </div>
</header>

<!-- main de la pagina -->
<main class="container mt-5 d-flex flex-column">
    <section class="card shadow p-4">
        <form class="needs-validation" novalidate action="../acciones/accionBuscarPersona.php" id="loginForm" method="get" enctype="multipart/form-data">
            <h2 class="mb-4 text-primary">Ingrese los datos</h2>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="validacionNroDniDuenio" class="form-label">Numero de DNI:</label>
                    <input type="text" id="validacionNroDniDuenio" name="nroDniDuenio" class="form-control" required>
                    <div class="invalid-feedback" id="nroDniDuenioInvalid"></div>
                    <div class="valid-feedback" id="nroDniDuenioValid"></div>
                </div>
            </div>
            <div class="col-md-12 d-flex gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>            
        </form>
    </section>
    <!-- Validador para formularios -->
    <script src="../assets/function/validadorBuscarPersona.js"></script>
</main>

<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>