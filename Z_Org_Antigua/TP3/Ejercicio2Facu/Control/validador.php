<?php
class Validador {
    private $allowedExtensions;
    private $maxSize;
    private $errores;

    public function __construct() {
        $this->allowedExtensions = ["txt"];
        $this->maxSize = 2 * 1024 * 1024;
        $this->errores = [];
    }

    // Devuelve los errores
    public function getErrores() {
        return $this->errores;
    }

    // Agrega un error al array
    public function agregarError($error) {
        $this->errores[] = $error;
    }

    // Comprueba si hay errores
    public function hayErrores() {
        return !empty($this->errores);
    }

    // Valida el archivo recibido
    public function validarArchivo($file) {
        if (!isset($file) || empty($file['name'])) {
            $this->agregarError("No se seleccionó ningún archivo.");
        } elseif ($file['error'] !== UPLOAD_ERR_OK) {
            $this->agregarError("Error en la carga del archivo.");
        } else {
            // Valida extensión
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (!in_array($extension, $this-> allowedExtensions)) {
                $this->agregarError("Tipo de archivo no permitido. Solo se acepta .txt.");
            }

            // Valida tamaño
            if ($file['size'] > $this-> maxSize) {
                $this->agregarError("El archivo excede el tamaño máximo permitido (2 MB).");
            }
        }
    }
}

?>