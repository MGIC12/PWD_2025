<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"></link>
    <title>Cargar Películas - Cinem@s</title>
</head>
<body class="container">
    <h1 class="pb-3">Cinem@s</h1>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control" id="titulo" placeholder="Título" required>
  </div>
  <div class="col-md-6">
    <label for="actores" class="form-label">Actores</label>
    <input type="text" class="form-control" id="actores" placeholder="Actores" required>
  </div>
  <div class="col-md-6">
    <label for="director" class="form-label">Director</label>
    <input type="text" class="form-control" id="director" placeholder="Director" required>
  </div>
  <div class="col-md-6">
    <label for="guion" class="form-label">Guión</label>
    <input type="text" class="form-control" id="guion" placeholder="Guión" required>
  </div>
  <div class="col-md-6">
    <label for="produccion" class="form-label">Producción</label>
    <input type="text" class="form-control" id="produccion">
  </div>
  <div class="col-md-2">
    <label for="anio" class="form-label">Año</label>
    <input type="text" class="form-control" id="anio">
  </div>
  <div class="col-md-6">
    <label for="nacionalidad" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" id="nacionalidad1">
  </div>
  <div class="col-md-4">
    <label for="nacionalidad2" class="form-label">Nacionalidad</label>
    <input type="text" class="form-control" id="nacionalidad2">
  </div>
  <div class="col-md-4">
    <label for="duracion" class="form-label">Duración</label>
    <input type="text" id="duracion" class="form-control">
    <div class="form-text">(minutos)</div>
  </div>
  <div class="col-md-6">
    <label for="edad" class="form-label fw-bold">Restricciones de edad</label>
    <br>
    <div>
    <input type="radio" name="edad" class="form-check-input" id="tdp" value="tdp"> Todo Público
    <input type="radio" name="edad" class="form-check-input" id="pg" value="pg"> Mayores de 7 años
    <input type="radio" name="edad" class="form-check-input" id="pg18" value="pg18"> Mayores de 18 años
    </div>
  </div>
  <div class="col-12">
    <label for="sinopsis" class="form-label">Sinopsis</label>
    <textarea name="sinopsis" id="sinopsis" class="form-control"></textarea>
  </div>
  <div class="col-12 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-light border border-secondary">Borrar</button>
  </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>