<?php 
class Validador {
    private $errores;
    private $mensajeVacio;
    private $mensajeInvalido;
    private $regex;

    public function __construct() {
        $this->errores = []; // Array para almacenar errores
        $this->mensajeVacio = "";
        $this->mensajeInvalido = "";
        $this->regex = "";
    }

    // Getter's
    public function getErrores() {
        return $this->errores;
    }

    public function getMensajeVacio() {
        return $this->mensajeVacio;
    }

    public function getMensajeInvalido() {
        return $this->mensajeInvalido;
    }

    public function getRegex() {
        return $this->regex;
    }

    // Setter's
    public function setErrores($nuevoError) {
        // Acumula errores en array
        $this->errores[] = $nuevoError;
    }

    public function setMensajeVacio($mensajeVacio) {
        $this->mensajeVacio = $mensajeVacio;
    }

    public function setMensajeInvalido($mensajeInvalido) {
        $this->mensajeInvalido = $mensajeInvalido;
    }

    public function setRegex($regex) {
        $this->regex = $regex;
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
        return !empty($this->getErrores());
    }
    
    private function validarCampo($valorInput,$regex,$mensajeInputVacio,$mensajeInputInvalido){
        $esvalido = false;
        $valorInput = trim($valorInput);
        if ($valorInput == 'null'){
            $this->setErrores($mensajeInputVacio);
        } elseif (!preg_match($regex, $valorInput)) {
            $this->setErrores($mensajeInputInvalido);
        } else {
            $esvalido = true;
        }
        return $esvalido;
    }

    public function validacionNroDniDuenio($valorInput){
        // Regex para nroDni (8 numeros)
        $regexDNI = "/^\d{8}$/";
        $this->setRegex($regexDNI);

        $mensajeInputInvalido = 'El formato en el campo "Numero DNI" es invalido.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Numero DNI" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }
}
?>