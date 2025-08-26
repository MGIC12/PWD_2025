<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
    <title>Ejercicio 3 - Login</title>
</head>
<body>
    <h1>TP2 - Ejercicio 3</h1>
    <form action="verificaPass.php" method="post" id="form">
        <label for="user">Ingrese su usuario: </label>
        <input type="text" name="user" id="user">
        <br><br>
        <label for="pass">Ingrese su contraseña: </label>
        <input type="password" name="pass" id="pass">
        <br><br>
        <input type="submit" value="Enviar">
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
</body>
</html>