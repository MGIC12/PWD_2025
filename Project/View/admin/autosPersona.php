<?php 
// que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados.
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/init.php';
$titulo = 'Busqueda de autos asociados';
include_once $GLOBALS['ROOT'] . 'Project/View/components/header.php';
?>
<main class="container mt-5 d-flex flex-column">
        <section class="card shadow p-4">
            <form class="needs-validation" novalidate action="../acciones/accionAutosPersona.php" id="loginForm" method="get" enctype="multipart/form-data">
                            <h2 class="mb-4 text-primary">Busqueda de auto asociados</h2>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="validacionNroDni" class="form-label">Ingrese el numero de DNI de la persona (8 numeros)</label>
                                    <input type="text" id="validacionNroDni" name="nroDni" class="form-control" required>
                                    <div class="invalid-feedback" id="nroDniInvalid"></div>
                                    <div class="valid-feedback" id="nroDniValid"></div>
                                </div>
                <div class="d-flex gap-2 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>            
        </form>
    </section>
    <!-- Validador para formularios -->
    <script src="../assets/function/validadorAutosPersona.js"></script>
</main>

<?php 
include_once $GLOBALS['ROOT'] . 'Project/View/components/footer.php';
?>