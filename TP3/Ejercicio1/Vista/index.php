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
                        // Carpeta destino
                        $carpetaUploads = __DIR__ . "/../Uploads";

                        if (!is_dir($carpetaUploads)) mkdir($carpetaUploads, 0777, true);

                        // Ruta donde guardar el archivo
                        $ruta = $carpetaUploads . "/" . uniqid() . "_" . $nombre;

                        // Mover archivo
                        if (move_uploaded_file($tmp, $ruta)) {
                            echo "<div class='alert alert-success'>";
                            echo "✅ Archivo subido con éxito<br>";
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