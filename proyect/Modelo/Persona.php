<?php

class Persona {

    private $dni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    public function __construct() {
        $this -> dni = "";
        $this -> apellido = "";
        $this -> nombre = "";
        $this -> fechaNac = "";
        $this -> telefono = "";
        $this -> domicilio = "";
    }
}

?>