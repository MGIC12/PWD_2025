<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="contenedor-form">
        <form action="verificaPass.php" method="post">
            <h2>Member login</h2>
            <div class="contenedor-usuario">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="contenedor-contrasenia">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="buttons">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>
</html>