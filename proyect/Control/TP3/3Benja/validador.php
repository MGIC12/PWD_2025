<?php 
class Validador {
    private $allowedExtensions; 
    private $errores;

    public function __construct() {
        $this->allowedExtensions = ["jpg", "jpeg", "png"]; // Extensiones permitidas
        $this->errores = []; // Array para almacenar errores
    }

    // Getter's
    public function getAllowedExtensions() {
        return $this->allowedExtensions;
    }

    public function getErrores() {
        return $this->errores;
    }

    // Setter's
    public function setAllowedExtensions($allowedExtensions) {
        $this->allowedExtensions = $allowedExtensions;
    }

    public function setErrores($nuevoError) {
        $this->errores[] = $nuevoError;
    }

    public function __toString(){
        $errores = $this->getErrores();
        $cadena = $errores;
        return $cadena;
    }

    // Método para agregar errores
    public function agregarError($error) {
        $this->errores[] = $error;
    }

    // Saber si hay errores
    public function hayErrores() {
        return !empty($this->errores);
    }
    
    public function validarTitulo($inputTitulo){
        $inputTitulo = trim($inputTitulo);
        if ($inputTitulo == "") {
            $this->setErrores("El título no puede estar vacío.");
        } else if (strlen($inputTitulo) < 3) {
            $this->setErrores("El título debe tener al menos 3 caracteres.");
        }
        return $inputTitulo; // devuelvo lo "limpio"
    }
    public function validarActores($inputActores){
        $inputActores = trim($inputActores);
        if ($inputActores == ""){
            $this->setErrores("El campo actores no puede estar vacio.");
        }
        return $inputActores;
    }
    public function validarDirector($inputDirector){
        $inputDirector = trim($inputDirector);
        if ($inputDirector == ""){
            $this->setErrores("El campo director no puede estar vacio.");
        }
        return $inputDirector;
    }
    public function validarGuion($inputGuion){
        $inputGuion = trim($inputGuion);
        if ($inputGuion == ""){
            $this->setErrores("El campo Guion no puede estar vacio.");
        }
        return $inputGuion;
    }
    public function validarProduccion($inputProduccion){
        $inputProduccion = trim($inputProduccion);
        if ($inputProduccion == ""){
            $this->setErrores("El campo produccion no puede estar vacio.");
        }
        return $inputProduccion;
    }
    public function validarAnio($inputAnio){
        $inputAnio = trim($inputAnio);
        if ($inputAnio == ""){
            $this->setErrores("El campo año no puede estar vacio.");
        } else if (!ctype_digit($inputAnio) || strlen($inputAnio) != 4) {
            $this->setErrores("El campo año debe contener exactamente 4 números.");
        }
        return $inputAnio;
    }
    public function validarNacionalidad($inputNacionalidad){
        $inputNacionalidad = trim($inputNacionalidad);
        if ($inputNacionalidad == ""){
            $this->setErrores("El campo nacionalidad no puede estar vacio.");
        }
        return $inputNacionalidad;
    }
    public function validarGenero($inputGenero){
        $inputGenero = trim($inputGenero);
        if ($inputGenero == ""){
            $this->setErrores("El campo genero no puede estar vacio");
        }
        return $inputGenero;
    }
    public function validarDuracion($inputDuracion){
        $inputDuracion = trim($inputDuracion);
        if ($inputDuracion == ""){
            $this->setErrores("El campo duracion, no puede estar vacio");
        } else if (!ctype_digit($inputDuracion) || strlen($inputDuracion) > 3) {
            $this->setErrores("El campo duracion debe contener 3 números como maximo.");
        }
        return $inputDuracion;
    }
    public function validarRestriccionEdad($inputRestriccionEdad){
        $inputRestriccionEdad = trim($inputRestriccionEdad);
        if($inputRestriccionEdad == ""){
            $this->setErrores("El campo restriccion edad, no puede estar vacio");
        }
        return $inputRestriccionEdad;
    }
    public function validarSinopsis($inputSinopsis){
        $inputSinopsis = trim($inputSinopsis);
        if ($inputSinopsis == ""){
            $this->setErrores("El campo sinopsis, no puede estar vacio.");
        }
        return $inputSinopsis;
    }

    public function validarArchivo($file) {
    // Recibo el archivo file, por parametros
    // Si $file NO existe (no está seteado) O el nombre del archivo está vacío:
    if (!isset($file) || empty($file['name'])) {
        // Agrego un error indicando que no se eligió archivo
        $this->agregarError("No se seleccionó ningún archivo.");
    } else {
        // UPLOAD_ERR_OK (valor 0) significa que PHP no detectó errores al recibirlo.
        // UPLOAD_ERR_OK es una constante predefinida en PHP que vale 0.
        if ($file['error'] !== UPLOAD_ERR_OK) {
            // Si el código NO es OK, registro un error
            $this->agregarError("Error en la carga del archivo.");
        } else {
            // === Validación de extensión ===
            // pathinfo obtiene partes de la ruta/nombre. Con PATHINFO_EXTENSION pido solo la extensión. (Ej: "documento.pdf" devuelve "pdf")
            // strtolower pone la extensión en minúsculas para comparar sin problemas de mayúsculas.
            $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            // in_array verifica si $extension está dentro del arreglo de extensiones permitidas.
            if (!in_array($extension, $this->getAllowedExtensions())) {
                $this->agregarError("Tipo de archivo no permitido. Solo se aceptan .jpg, .jpeg y .png.");
            // === Validacion de lectura ===
            }
            }
        }
    }
}
?>