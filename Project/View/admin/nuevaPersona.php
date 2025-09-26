<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Ingresar persona';
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<!-- header propio -->
<header class="bg-light py-1">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h4>Ingresar una persona</h4>
        </div>
    </div>
</header>

<!-- main de la pagina -->
<main class="container mt-5 d-flex flex-column">
    <section class="card shadow p-4">
        <form class="needs-validation" novalidate action="../acciones/accionNuevaPersona.php" id="loginForm" method="post" enctype="multipart/form-data">
            <h2 class="mb-4 text-primary">Ingrese los datos de la persona que desea registrar en el sistema</h2>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="validacionNombre" class="form-label">Nombre</label>
                    <input type="text" id="validacionNombre" name="nombre" class="form-control" required>
                    <div class="invalid-feedback" id="nombreInvalid"></div>
                    <div class="valid-feedback" id="nombreValid"></div>
                </div>
                <div class="col-md-6">
                    <label for="validacionApellido" class="form-label">Apellido</label>
                    <input type="text" id="validacionApellido" name="apellido" class="form-control" required>
                    <div class="invalid-feedback" id="apellidoInvalid"></div>
                    <div class="valid-feedback" id="apellidoValid"></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="validacionNroDni" class="form-label">Numero DNI (numero de 8 digitos)</label>
                    <input type="text" id="validacionNroDni" name="nroDni" class="form-control" required>
                    <div class="invalid-feedback" id="nroDniInvalid"></div>
                    <div class="valid-feedback" id="nroDniValid"></div>
                </div>
                <div class="col-md-6">
                    <label for="validacionFechaNacimiento" class="form-label">Fecha de nacimiento (formato: AAAA-MM-DD)</label>
                    <input type="text" id="validacionFechaNacimiento" name="fechaNacimiento" class="form-control" required>
                    <div class="invalid-feedback" id="fechaNacimientoInvalid"></div>
                    <div class="valid-feedback" id="fechaNacimientoValid"></div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="validacionNumTelefono" class="form-label">Numero de telefono (Formato: 012-3456789)</label>
                    <input type="text" id="validacionNumTelefono" name="numTelefono" class="form-control" required>
                    <div class="invalid-feedback" id="numTelefonoInvalid"></div>
                    <div class="valid-feedback" id="numTelefonoValid"></div>
                </div>
                <div class="col-md-6">
                    <label for="validacionDomicilio" class="form-label">Domicilio (formato: Calle numero)</label>
                    <input type="text" id="validacionDomicilio" name="domicilio" class="form-control" required>
                    <div class="invalid-feedback" id="domicilioInvalid"></div>
                    <div class="valid-feedback" id="domicilioValid"></div>
                </div>
            </div>
            <div class="col-md-12 d-flex gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
            </div>            
        </form>
    </section>
    <!-- Validador para formularios -->
    <script src="../assets/function/validadorNuevaPersona.js"></script>
</main>

<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>