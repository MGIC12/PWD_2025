<?php
include '../../../../Control/TP2/2/8/procesamientoEntrada.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado Entrada</title>
<link href="../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<?php include_once('../../../structure/header.php'); ?>

<div class="container d-flex justify-content-between align-items-center mb-3">
    <h1>Resultado</h1>
    <a href="inicio.php" class="btn btn-secondary">← Volver</a>
</div>
<hr>

<?php if($error): ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php else: ?>
    <div class="container card p-3 <?= $clase ?>">
        <h5 class="card-title">Precio de la entrada</h5>
        <p>Edad: <b><?= $edad ?></b></p>
        <p>Estudiante: <b><?= $estudiante === "si" ? "Sí" : "No" ?></b></p>
        <p>El precio de la entrada es de: <b>$<?= $precio ?></b></p>
    </div>
<?php endif; ?>

<!-- footer -->
<?php include_once('../../../structure/footer.php'); ?>

</body>
</html>
