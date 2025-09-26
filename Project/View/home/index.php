<?php 
    $titulo = "Inicio - PWD 2025";
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_IBENJAMINDLF/Project/View/components/header.php';
?>

<link rel="stylesheet" href="<?php echo $BASE_URL; ?>Project/View/assets/style/styleCarrusel.css">

<!-- Contenido principal -->
<div class="container">

    <!-- Bienvenida -->
    <div class="container">
        <div class="container text-center py-5">
            <h1 class="display-4 fw-bold text-primary">Bienvenid@ a PWD 2025</h1>
            <p class="lead bg-info text-dark d-inline-block px-4 py-2 rounded-pill mt-3 shadow-sm">
                🚀 Trabajos Prácticos y equipo de desarrollo
            </p>
            <div class="mt-4">
                <a href="#integrantes" class="btn btn-primary btn-lg shadow">Ver equipo de desarrollo</a>
            </div>
        </div>
    </div>

    <!-- Proyectos destacados -->
    <section id="proyectos-destacados" class="text-center my-5">
        <h2>Proyectos destacados</h2>
        <div class="mt-4">
            <a
                name=""
                id=""
                class="btn btn-primary btn-lg shadow"
                href="#"
                role="button"
            >
                Proximamente
            </a>
            
            <!-- <a href="<?php // echo $BASE_URL; ?>Project/view/T1/E8/inicio.php" class="btn btn-primary btn-lg shadow">Ejercicio 8 T.P N°1</a> -->
        </div>
    </section>

    <!-- Resolución trabajos -->
    <section id="resolucion-trabajos" class="text-center my-5">
        <h2>Resolución de trabajos prácticos</h2>
        <div class="mt-4">
            <a href="indexT4.php" class="btn btn-primary btn-lg shadow">Trabajo Práctico N°4</a>
        </div>
    </section>

    <!-- Integrantes -->
    <section id="integrantes" class="my-5">
        <h2 class="text-center">Equipo de desarrollo</h2>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner text-center">
                
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <a href="https://github.com/Ibenjamindlf" target="_blank">
                        <img src="https://avatars.githubusercontent.com/u/206235917?v=4" 
                            class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Benja">
                    </a>
                    <div class="mt-3">
                        <h5>Benjamin de la Fuente</h5>
                        <p>@Ibenjamindlf</p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <a href="https://github.com/tebacs" target="_blank">
                        <img src="https://avatars.githubusercontent.com/u/149085169?v=4" 
                            class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Mati">
                    </a>
                    <div class="mt-3">
                        <h5>Matias Bacsay</h5>
                        <p>@tebacs</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <a href="https://github.com/MGIC12" target="_blank">
                        <img src="https://avatars.githubusercontent.com/u/68124872?v=4" 
                            class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Marian">
                    </a>
                    <div class="mt-3">
                        <h5>Mariano Infante</h5>
                        <p>@MGIC12</p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-item">
                    <a href="https://github.com/FacuLedesmaBertalot" target="_blank">
                        <img src="https://avatars.githubusercontent.com/u/150484970?v=4" 
                            class="d-inline-block w-25 shadow-lg p-3 mb-5 bg-body-tertiary rounded" alt="Facu">
                    </a>
                    <div class="mt-3">
                        <h5>Facundo Ledesma</h5>
                        <p>@FacuLedesmaBertalot</p>
                    </div>
                </div>
            </div>

            <!-- Indicadores -->
            <div class="carousel-indicators position-static mt-2">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" 
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>

            <!-- Controles -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

</div>

<!-- Footer -->
<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_IBENJAMINDLF/Project/View/components/footer.php';
?>

