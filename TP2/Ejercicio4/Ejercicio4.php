<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"></link>
    <title>Cargar Películas - Cinem@s</title>
</head>
<body class="container">
    <h1 class="pb-3">Cinem@s</h1>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="titulo" class="form-label fw-bold">Título</label>
    <input type="text" class="form-control" id="titulo" placeholder="Título" required>
  </div>
  <div class="col-md-6">
    <label for="actores" class="form-label fw-bold">Actores</label>
    <input type="text" class="form-control" id="actores" placeholder="Actores" required>
  </div>
  <div class="col-md-6">
    <label for="director" class="form-label fw-bold">Director</label>
    <input type="text" class="form-control" id="director" placeholder="Director" required>
  </div>
  <div class="col-md-6">
    <label for="guion" class="form-label fw-bold">Guión</label>
    <input type="text" class="form-control" id="guion" placeholder="Guión" required>
  </div>
  <div class="col-md-6">
    <label for="produccion" class="form-label fw-bold">Producción</label>
    <input type="text" class="form-control" id="produccion">
  </div>
  <div class="col-md-2">
    <label for="anio" class="form-label fw-bold">Año</label>
    <input type="text" class="form-control" id="anio">
  </div>
  <div class="col-md-6">
    <label for="nacionalidad" class="form-label fw-bold">Nacionalidad</label>
    <input type="text" class="form-control" id="nacionalidad1">
  </div>
  <div class="col-md-4">
    <label for="genero" class="form-label fw-bold">Género</label>
    <select type="text" class="form-select" id="genero">
      <option value="#" selected disabled hidden>Seleccione un género</option>
      <option value="accion">Accion</option>
      <option value="comedia">Comedia</option>
      <option value="drama">Drama</option>
      <option value="romance">Romance</option>
      <option value="suspenso">Suspenso</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="duracion" class="form-label fw-bold">Duración</label>
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
    <label for="sinopsis" class="form-label fw-bold">Sinopsis</label>
    <textarea name="sinopsis" id="sinopsis" class="form-control"></textarea>
  </div>
  <div class="col-12 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <button type="reset" class="btn btn-light border border-secondary">Borrar</button>
  </div>
</form>
<script>
  const validate = new window.JustValidate('#form');
  validate
      .addField('#titulo', [
          {
              rule: 'required',
              errorMessage: 'El títolo es requerido'
          },
          {
              rule: 'minLength',
              value: 3,
              errorMessage: 'El título debe tener al menos 3 caracteres'
          },
          {
              rule: 'maxLength',
              value: 50,
              errorMessage: 'El títolo debe tener máximo 50 caracteres'
          }
      ]);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>