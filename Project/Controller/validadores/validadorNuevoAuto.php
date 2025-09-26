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
    
    public function validacionPatente($valorInput){
        // Regex para patente valida: 3 letras mayusculas, guion -, 3 numeros
        $regexPatente = "/^[A-Z]{3}-\d{3}$/";
        // $regexTexto = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/";
        $this->setRegex($regexPatente);

        $mensajeInputInvalido = 'El formato en el campo "Patente" es invalido.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Patente" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionMarca($valorInput){
        // Regex para marca valida: permite letras,espacios y numeros
        $regexMarca = "/^[A-Za-z0-9 ]+$/";
        $this->setRegex($regexMarca);

        $mensajeInputInvalido = 'El formato en el campo "Marca" es invalido.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Marca" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionModelo($valorInput){
        // Regex para modelo valido: permite un numero de 4 digitos (anio fabricacion)
        $regexModelo = "/^\d{4}$/";
        $this->setRegex($regexModelo);

        $mensajeInputInvalido = 'El formato en el campo "Modelo" es invalido.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Modelo" no puede estar vacio.';
        $this->setMensajeVacio($mensajeInputVacio);

        $esValido = $this->validarCampo($valorInput,$this->getRegex(),$this->getMensajeVacio(),$this->getMensajeInvalido());
        return $esValido;
    }

    public function validacionNroDniDuenio($valorInput){
        // Regex para nroDni (8 numeros)
        $regexDNI = "/^\d{8}$/";
        $this->setRegex($regexDNI);

        $mensajeInputInvalido = 'El formato en el campo "Numero DNI dueño" es invalido.';
        $this->setMensajeInvalido($mensajeInputInvalido);

        $mensajeInputVacio = 'El campo "Numero DNI dueño" no puede estar vacio.';
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