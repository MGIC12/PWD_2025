<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"></link>
    <title>Ejercicio 3 - Login</title>
</head>
<body class="d-flex justify-content-center bg-secondary text-center">
    <form class="container bg-light p-5 align-items-center justify-content-center mt-5 w-25 rounded-2" action="verificaPass.php" method="post" id="form">
    <h2 class="text-center text-secondary fw-normal pb-4">Member Login</h2>
    <input type="text" name="user" id="user" placeholder="Username" class="form-control w-75 mx-auto rounded-1">
    <br>
    <input type="password" name="pass" id="pass" placeholder="Password" class="form-control w-75 mx-auto rounded-1">
    <br>
    <input type="submit" value="Login" class="btn btn-success w-75 mx-auto rounded-1">
</form>
    <script>
    const validate = new window.JustValidate('#form');
    validate
        .addField('#user', [
            {
                rule: 'required',
                errorMessage: 'El usuario es requerido'
            },
            {
                rule: 'minLength',
                value: 3,
                errorMessage: 'El usuario debe tener al menos 3 caracteres'
            },
            {
                rule: 'maxLength',
                value: 10,
                errorMessage: 'El usuario debe tener máximo 10 caracteres'
            }
        ])
        .addField('#pass', [
            {
                rule: 'required',
                errorMessage: 'La contraseña es requerida'
            },
            {
                rule: 'minLength',
                value: 8,
                errorMessage: 'La contraseña debe tener al menos 8 caracteres'
            }
        ])
        .onSuccess((event) => {
            event.preventDefault();
            document.getElementById('form').submit();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>