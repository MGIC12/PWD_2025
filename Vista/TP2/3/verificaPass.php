<?php
$juan = [
        "user" => "Juan",
        "pass" => "12345678"
            ];

$mariano = [
        "user" => "MGIC",
        "pass" => "oda120604"
            ];

$personas = [$juan, $mariano];
$usuario = $_POST["user"];
$pass = $_POST["pass"];

foreach ($personas as $persona) {
    if ($usuario != '' && $pass != '' && $persona["user"] == $usuario && $persona["pass"] == $pass) {
        echo "Bienvenido, el usuario es: ", "<b>$usuario</b>", " y la contraseña es: ", "<b>$pass</b>";
        exit;
    }
}
echo "El usuario o la contraseña son incorrectos";
?>