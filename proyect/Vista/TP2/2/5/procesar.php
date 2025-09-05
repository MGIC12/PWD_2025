<?php
include_once('../../../../Utils/funciones.php');

$datos = datasubmited();

// Bandera para mostrar contenido
$mostrarContenido = !empty($datos);

$nivelEstudios = $datos['estudios'] ?? null;
$sexo = $datos['sexo'] ?? null;
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include_once('../../../structure/header.php'); ?>

  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2 class="mb-4 text-center">Resultado del formulario</h2>

      <?php if ($mostrarContenido): ?>
        <div class="mb-3">
          <?php
          // Mensajes de nivel de estudios
          switch ($nivelEstudios) {
            case '1':
              echo '<div class="alert alert-info">📘 Usted no tiene estudios</div>';
              break;
            case '2':
              echo '<div class="alert alert-success">📗 Usted tiene estudios primarios</div>';
              break;
            case '3':
              echo '<div class="alert alert-warning">📙 Usted tiene estudios secundarios</div>';
              break;
            default:
              echo '<div class="alert alert-danger">❓ Nivel de estudios no reconocido</div>';
              break;
          }

          // Mensajes de sexo
          switch ($sexo) {
            case 'M':
              echo '<div class="alert alert-primary">👨 Usted eligió el sexo masculino</div>';
              break;
            case 'F':
              echo '<div class="alert alert-danger">👩 Usted eligió el sexo femenino</div>';
              break;
            case 'O':
              echo '<div class="alert alert-secondary">🌈 Usted eligió otro sexo</div>';
              break;
            default:
              echo '<div class="alert alert-dark">❓ Sexo no reconocido</div>';
              break;
          }
          ?>
        </div>
      <?php else: ?>
        <div class="alert alert-warning">⚠️ No se recibieron datos</div>
      <?php endif; ?>

      <div class="d-flex justify-content-start mt-4">
        <a href="Inicio.php" class="btn btn-outline-primary">⬅ Volver al formulario</a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include_once('../../../structure/footer.php'); ?>
</body>
</html>
