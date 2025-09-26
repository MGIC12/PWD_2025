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
    
    public function validacionNombre($valorInput){
        $regexTexto = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/";
        $this->setRegex($regexTexto);

        $mensajeInputInvalido = 'En el campo "nombre" solo se admiten letras y espacios.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "nombre" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionApellido($valorInput){
        $regexTexto = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/";
        $this->setRegex($regexTexto);

        $mensajeInputInvalido = 'En el campo "apellido" solo se admiten letras y espacios.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "apellido" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionNroDni($valorInput){
        $regexDNI = "/^\d{8}$/";
        $this->setRegex($regexDNI);

        $mensajeInputInvalido = 'En el campo "numero DNI" solo se admite un numero de 8 digitos.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "numero de DNI" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionFechaNacimiento($valorInput){
        $regexFechaNacimiento = "/^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/";
        $this->setRegex($regexFechaNacimiento);

        $mensajeInputInvalido = 'En el campo "fecha de nacimiento" solo se admite una fecha valida con el formato año/mes/dia.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "fecha de nacimiento" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionNumeroTelefono($valorInput){
        $regexNumTelefono = "/^\d{3}-\d{7}$/";
        $this->setRegex($regexNumTelefono);

        $mensajeInputInvalido = 'En el campo "numero de telefono" solo se admite un numero de telefono valido con el formato 012-3456789.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "numero de telefono" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionDomicilio($valorInput){
        $regexDomicilio = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+\s\d+$/";
        $this->setRegex($regexDomicilio);

        $mensajeInputInvalido = 'En el campo "Domicilio" solo se admite un domiclio valido con el formato calle numero (ejemplo: Avenida 11).';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Domicilio" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

}
?>