<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4.2</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <?php
    include_once('../../structure/header.php');
    ?>

    <main class="container mt-5">
        <section class="card shadow p-4">
            <form class="needs-validation" novalidate action="procesar.php" id="loginForm" method="post">
                <h2 class="mb-4 text-primary">🎬 Cinem@s</h2>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="validacionTitulo" class="form-label">Título</label>
                        <input type="text" id="validacionTitulo" name="titulo" class="form-control" required>
                        <div class="invalid-feedback" id="tittleError"></div>
                        <div class="valid-feedback" id="tittleValido"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="validacionActores" class="form-label">Actores</label>
                        <input type="text" id="validacionActores" name="actores" class="form-control" required>
                        <div class="invalid-feedback" id="actoresError"></div>
                        <div class="valid-feedback" id="actoresValido"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="validacionDirector" class="form-label">Director</label>
                        <input type="text" id="validacionDirector" name="director" class="form-control" required>
                        <div class="invalid-feedback" id="directorError"></div>
                        <div class="valid-feedback" id="directorValido"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="validacionGuion" class="form-label">Guion</label>
                        <input type="text" id="validacionGuion" name="guion" class="form-control" required>
                        <div class="invalid-feedback" id="guionError"></div>
                        <div class="valid-feedback" id="guionValido"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="validacionProduccion" class="form-label">Producción</label>
                        <input type="text" id="validacionProduccion" name="produccion" class="form-control" required>
                        <div class="invalid-feedback" id="produccionError"></div>
                        <div class="valid-feedback" id="produccionValido"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="validacionAnio" class="form-label">Año</label>
                        <input type="number" id="validacionAnio" name="anio" class="form-control" required>
                        <div class="invalid-feedback" id="anioError"></div>
                        <div class="valid-feedback" id="anioValido"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="validacionNacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" id="validacionNacionalidad" name="nacionalidad" class="form-control" required>
                        <div class="invalid-feedback" id="nacionalidadError"></div>
                        <div class="valid-feedback" id="nacionalidadValido"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="validacionGenero" class="form-label">Género</label>
                        <select id="validacionGenero" name="genero" class="form-select" required>
                            <option selected disabled value="">Seleccione un género</option>
                            <option value="accion">Acción</option>
                            <option value="drama">Drama</option>
                            <option value="comedia">Comedia</option>
                            <option value="terror">Terror</option>
                        </select>
                        <div class="invalid-feedback" id="generoError"></div>
                        <div class="valid-feedback" id="generoValido"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="validacionDuracion" class="form-label">Duración (minutos)</label>
                        <input type="number" id="validacionDuracion" name="duracion" class="form-control" required>
                        <div class="invalid-feedback" id="duraccionError"></div>
                        <div class="valid-feedback" id="duraccionValido"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Restricción Edad</label>
                        <div class="form-check">
                            <input type="radio" name="restriccionEdad" id="publico" value="Apto para todo publico" class="form-check-input" required>
                            <label for="publico" class="form-check-label">Todos los públicos</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restriccionEdad" id="mayores7" value="Mayores de 7 años" class="form-check-input">
                            <label for="mayores7" class="form-check-label">Mayores 7 años</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restriccionEdad" id="mayores18" value="Mayores de 18 años" class="form-check-input">
                            <label for="mayores18" class="form-check-label">Mayores 18 años</label>
                            <div class="invalid-feedback" id="restriccionEdadError"></div>
                            <div class="valid-feedback" id="restriccionEdadValido"></div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="sinopsis" class="form-label"><b>Sinopsis</b></label>
                    <textarea id="sinopsis" name="sinopsis" rows="4" class="form-control"></textarea>
                    <div class="invalid-feedback" id="sinopsisError"></div>
                    <div class="valid-feedback" id="sinopsisValido"></div>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>
            </form>
        </section>
    </main>

    <!-- footer -->

    <?php
    include_once('../../structure/footer.php');
    ?>
    <script src="../../Frameworks/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="scriptValidacionForm.js"></script>
    <!-- <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
</body>

</html>