<?php
$target_dir = "../../../Uploads/";
$target_file = $target_dir . basename($_FILES["archivo"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Verificar si el archivo ya existe
if (file_exists($target_file)) {
  echo "Este archivo ya existe.";
  $uploadOk = 0;
}

// Verificar el tamaño del archivo
if ($_FILES["archivo"]["size"] > 2000000) {
  echo "El archivo es mayor a 2MB.";
  $uploadOk = 0;
}

// Permitir solo archivos .doc y .pdf
if($fileType != "doc" && $fileType != "pdf") {
  echo "Solo se permiten archivos .doc y .pdf";
  $uploadOk = 0;
}

// Verificar si $uploadOk es 0
if ($uploadOk == 0) {
  echo "<br>Error al subir el archivo";
// Si $uploadOk es 1, entonces subir el archivo
} else {
  if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $target_file)) {
    echo "El archivo ". htmlspecialchars(basename($_FILES["archivo"]["name"])). " ha sido subido.";
  } else {
    echo "<br>Error al subir el archivo.";
  }
}
?>