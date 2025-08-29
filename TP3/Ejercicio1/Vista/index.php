<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow p-4">

            <h3 class="mb-4">Subir Archivo</h3>

            <!-- Formulario para subir archivo -->
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="archivo" class="form-label">Selecciona un archivo: (.doc o .pdf)</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>

            <div class="mt-4">
                <?php
                if (!empty($_FILES)) {
                    $archivo = $_FILES["archivo"];
                    $nombre = basename($archivo["name"]);
                    $tamanio = $archivo["size"];
                    $tmp = $archivo["tmp_name"];
                    $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));

                    $permitidos = ["pdf", "doc"];
                    $maximo = 2 * 1024 * 1024; // 2MB

                    if (!in_array($ext, $permitidos)) {
                        echo "<div class='alert alert-danger'>❌ Solo se permiten archivos .doc o .pdf</div>";
                    } elseif ($tamanio > $maximo) {
                        echo "<div class='alert alert-danger'>❌ El archivo supera los 2MB</div>";
                    } else {
                        // Carpeta destino (un nivel arriba de Vista)
                        $carpetaUploads = __DIR__ . "/../Uploads";

                        // Crear carpeta si no existe
                        if (!is_dir($carpetaUploads)) mkdir($carpetaUploads, 0777, true);

                        // Ruta física donde guardar el archivo
                        $rutaFisica = $carpetaUploads . "/" . uniqid() . "_" . $nombre;

                        // Ruta accesible por el navegador
                        $rutaWeb = "../Uploads/" . basename($rutaFisica);

                        // Mover archivo
                        if (move_uploaded_file($tmp, $rutaFisica)) {
                            echo "<div class='alert alert-success'>";
                            echo "✅ Archivo subido con éxito<br>";
                            echo "<a href='$rutaWeb' target='_blank' class='btn btn-link mt-2'>Abrir archivo</a>";
                            echo "</div>";
                        } else {
                            echo "<div class='alert alert-danger'>❌ Error al guardar el archivo</div>";
                        }
                    }
                }
                ?>
            </div>

        </div>
    </div>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>