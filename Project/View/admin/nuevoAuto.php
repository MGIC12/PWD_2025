<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Ingresar Auto';
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Ingresar un auto</h4>
        </div>
    </div>
</header>

<!-- main de la pagina -->
<main class="container mt-5 d-flex flex-column">
    <section class="card shadow p-4">
        <form class="needs-validation" novalidate action="../acciones/accionNuevoAuto.php" id="loginForm" method="post" enctype="multipart/form-data">
            <h2 class="mb-4 text-primary">Ingrese los datos del auto que desea registrar en el sistema</h2>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="validacionPatente" class="form-label">Patente</label>
                    <input type="text" id="validacionPatente" name="patente" class="form-control" required>
                    <div class="invalid-feedback" id="patenteInvalid"></div>
                    <div class="valid-feedback" id="patenteValid"></div>
                </div>
                <div class="col-md-6">
                    <label for="validacionMarca" class="form-label">Marca</label>
                    <input type="text" id="validacionMarca" name="marca" class="form-control" required>
                    <div class="invalid-feedback" id="marcaInvalid"></div>
                    <div class="valid-feedback" id="marcaValid"></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="validacionModelo" class="form-label">Modelo</label>
                    <input type="text" id="validacionModelo" name="modelo" class="form-control" required>
                    <div class="invalid-feedback" id="modeloInvalid"></div>
                    <div class="valid-feedback" id="modeloValid"></div>
                </div>
                <div class="col-md-6">
                    <label for="validacionNroDniDuenio" class="form-label">Numero de DNI del dueño</label>
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
    <script src="../assets/function/validadorNuevoAuto.js"></script>
</main>

<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>