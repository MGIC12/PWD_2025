<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="tituloh1">Validación Bootstrap</h1>
    <div class="contenedor-form">
        <h2>Calculadora Basica</h2>
        <form class="row g-3 needs-validation" novalidate action="procesar.php" method="post">
            <div class="col-md4 input-form input-nombre">
                <label for="validacionPrimerDigito" class="form-label">Primer digito</label>
                <input type="number" class="form-control" id="validacionPrimerDigito" name="num1" required>
                <div class="invalid-feedback">Por favor, ingrese el primer digito.
                </div>
            </div>
            <div class="col-md4 input-form input-nombre">
                <label for="validacionSegundoDigito" class="form-label">Segundo digito</label>
                <input type="number" class="form-control" id="validacionSegundoDigito" name="num2" required>
                <div class="invalid-feedback">Por favor, ingrese el segundo digito.
                </div>
            </div>
            <!-- Select operacion -->
            <div class="col-md3">
                <label for="validacionOperacion" class="form-label">Operacion</label>
                <select class="form-select" name="operacion" id="validacionOperacion" required>
                    <option selected disabled value="">Operacion</option>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicacion</option>
                    <option value="division">Division</option>
                </select>
                <div class="invalid-feedback">Por favor, ingrese el segundo digito.
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center gap-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
                <button class="btn btn-primary" type="reset">Limpiar</button>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>