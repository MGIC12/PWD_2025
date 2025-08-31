<?php

if (!empty($_FILES['archivo'])) {

    if (isset($_FILES['archivo']['error']) && $_FILES['archivo']['error'] !== UPLOAD_ERR_OK) {
        $msg = '❌ Error al subir el archivo (código '.$_FILES['archivo']['error'].')';
        $tipo = 'danger';
        $link = '';
    } else {
        $archivo = $_FILES['archivo'];
        $nombre = basename($archivo['name']);
        $ext = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
        $maximo = 2 * 1024 * 1024; // 2MB

        if (!in_array($ext, ['pdf', 'doc'])) {
            $msg = '❌ Solo se permiten archivos .doc o .pdf';
            $tipo = 'danger';
            $link = '';

        } elseif ($archivo['size'] > $maximo) {
            $msg = '❌ El archivo supera los 2MB';
            $tipo = 'danger';
            $link = '';

        } else {
            $uploadsFs = __DIR__ . '/../Uploads';
            if (!is_dir($uploadsFs)) mkdir($uploadsFs, 0777, true);

            $nombreFinal = uniqid() . '_' . $nombre;
            $rutaFs = $uploadsFs . '/' . $nombreFinal;

            if (move_uploaded_file($archivo['tmp_name'], $rutaFs)) {
                $msg = '✅ Archivo subido con éxito';
                $tipo = 'success';
                $link = '../Uploads/' . $nombreFinal;

            } else {
                $msg = '❌ Error al guardar el archivo';
                $tipo = 'danger';
                $link = '';
            }
        }
    }
} else {
    $msg = '❌ No se seleccionó archivo';
    $tipo = 'danger';
    $link = '';
}

header('Location: ../Vista/index.php?msg=' . urlencode($msg) . '&tipo=' . urlencode($tipo) . '&link=' . urlencode($link));
exit;

