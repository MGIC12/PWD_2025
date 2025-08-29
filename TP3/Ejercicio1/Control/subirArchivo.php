<?php
$resultado = [];

if (!empty($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    $nombre = basename($archivo['name']);
    $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    $maximo = 2 * 1024 * 1024;

    if (!in_array($ext, ['pdf', 'doc'])) {
        $resultado = ['msg' => '❌ Solo se permiten archivos .doc o .pdf', 'tipo' => 'danger'];

    } elseif ($archivo['size'] > $maximo) {
        $resultado = ['msg' => '❌ El archivo supera los 2MB', 'tipo' => 'danger'];

    } else {
        $uploads = '../Uploads';

        if (!is_dir($uploads)) mkdir($uploads, 0777, true);
        $ruta = $uploads . '/' . uniqid() . '_' . $nombre;

        if (move_uploaded_file($archivo['tmp_name'], $ruta)) {
            $resultado = ['msg' => '✅ Archivo subido con éxito', 'tipo' => 'success', 'link' => $ruta];
            
        } else {
            $resultado = ['msg' => '❌ Error al guardar el archivo', 'tipo' => 'danger'];
        }
    }
}

return $resultado;
?>
