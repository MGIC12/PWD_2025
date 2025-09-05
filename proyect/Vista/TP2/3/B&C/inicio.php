<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./../../../../Frameworks/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="styleForm.css">
</head>
<body class="d-flex flex-column min-vh-100">
     <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>

    <div class="d-flex justify-content-center align-items-center vh-100 bg-secondary">
        <!-- Usamos el apartado de background,card y flex -->
        <!-- En este apartado usamos la sombra de bootstrap, muy bajita -->
        <div class="card bg-light text-dark p-3 mb-3 shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="max-width: 30rem;">
            <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action="verificaPass.php" method="post" id="loginForm">
                    <!-- Título -->
                    <!-- Apartado text -->
                    <h3 class="text-center mb-4">Member login</h3>
                    <!-- Usuario -->
                    <!-- Se uso input group -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="user-addon"><i class="bi bi-person-circle"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="user-addon" id="usuario" name="usuario" required>
                        <div class="invalid-feedback" id="usserError">
                            
                        </div>
                    </div>
                    <!-- Password -->
                    <!-- Se uso input group -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="pass-addon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" class="form-control" placeholder="Password" aria-describedby="pass-addon" id="password" name="password" required>
                        <div class="invalid-feedback" id="passwordError">
                            
                        </div>
                    </div>
                    <!-- Botón -->
                    <!-- Usamos el apartado buttons -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-outline-success">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="scriptValidacionForm.js"></script>
    <!-- <script src="scriptBootstrap.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>
</html>