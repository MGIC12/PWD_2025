<?php 
class Validador {
    private $errores;

    public function __construct() {
        $this->errores = [];
    }

    // Getter de errores
    public function getErrores() {
        return $this->errores;
    }

    // Setter que pushea en lugar de sobreescribir
    public function setErrores($nuevoError) {
        $this->errores[] = $nuevoError;
    }

    public function __toString(){
        $errores = $this->getErrores();
        $cadena = $errores;
        return $cadena;
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
}
?>