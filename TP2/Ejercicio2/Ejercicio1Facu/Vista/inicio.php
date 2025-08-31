<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./../../../../Frameworks/bootstrap.min.css">
</head>

<body class="container mt-5">
    <h1>TP1 - Ejercicio 1</h1>
    <hr>
    <br>
    <form action="vernumero.php" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="num" class="form-label">Ingrese un número: </label>
            <input type="number" name="num" id="num" class="form-control" required>
            <div class="invalid-feedback">
                Por Favor Ingrese un Número Válido

            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="../../../../Frameworks/bootstrap.min.js"></script>

    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>

</html>