<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/project/model/conector/dataBase.php';
class persona {
    // Atributos de la clase
    // Por cada columna de la tabla en la base de datos
    private $NroDni;
    private $Apellido;
    private $Nombre;
    private $fechaNac;
    private $Telefono;
    private $Domicilio;
    private $mensajeOperacion;

    // constructor de la clase
    public function __construct() {
        $this->NroDni = "";
        $this->Apellido = "";
        $this->Nombre = "";
        $this->fechaNac = "";
        $this->Telefono = "";
        $this->Domicilio = "";
        $this->mensajeOperacion = "";
    }
    // Funcion para setear todos los atributos de la clase
    public function setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio){
        $this->setNroDni($NroDni);
        $this->setApellido($Apellido);
        $this->setNombre($Nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($Telefono);
        $this->setDomicilio($Domicilio);
    }

    // getters
    public function getNroDni() {
        return $this->NroDni;
    }
    public function getApellido() {
        return $this->Apellido;
    }
    public function getNombre() {
        return $this->Nombre;
    }
    public function getFechaNac() {
        return $this->fechaNac;
    }
    public function getTelefono() {
        return $this->Telefono;
    }
    public function getDomicilio() {
        return $this->Domicilio;
    }
    public function getMensajeOperacion(){
        return $this->mensajeOperacion ;
    }

    // setters
    public function setNroDni($NroDni) {
        $this->NroDni = $NroDni;
    }
    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }
    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }
    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }
    public function setTelefono($Telefono) {
        $this->Telefono = $Telefono;
    }
    public function setDomicilio($Domicilio) {
        $this->Domicilio = $Domicilio;
    }
    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }
    // Método para representar el objeto como una cadena
    public function __toString() {
        // Guardamos todos los atributos en variables locales
        $NroDni = $this->getNroDni();
        $Apellido = $this->getApellido();
        $Nombre = $this->getNombre();
        $fechaNac = $this->getFechaNac();
        $Telefono = $this->getTelefono();
        $Domicilio = $this->getDomicilio();
        // Retornamos una cadena con la información del objeto
        return (
            "DNI: $NroDni, Apellido: $Apellido, Nombre: $Nombre, Fecha de Nacimiento: $fechaNac, Teléfono: $Telefono, Domicilio: $Domicilio"
        );
    }
    // 5 funciones (cargar,listar,insertar,modificar,eliminar) -> phpMyAdmin

    // Funcion para buscar una persona por su nroDNI en la base de datos
    // Return true si se encontró a la persona, false si no
    public function cargar(){
    $resp = false;
    $dataBase = new DataBase();
    $sql = "SELECT * FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
    if ($dataBase->iniciar()) {
        $res = $dataBase->ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                $row = $dataBase->registro();
                $this->setear(
                    $row['NroDni'],
                    $row['Apellido'],
                    $row['Nombre'],
                    $row['fechaNac'],
                    $row['telefono'],
                    $row['Domicilio']
                );
                $resp = true;
            }
        }
    } else {
        $this->setMensajeOperacion("Persona->cargar" . $dataBase->getError());
    }
    return $resp;
    }

    // Funcion para insertar una nueva persona
    // Return true si se pudo insertar, false si no
    public function insertar() {
        $resp = false;
        $dataBase = new DataBase();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio)
                    VALUES ('" . $this->getNroDni() . "', '" . $this->getApellido() . "', '" .
                                $this->getNombre() . "', '" . $this->getFechaNac() . "', '" .
                                $this->getTelefono() . "', '" . $this->getDomicilio() . "')";
        if ($dataBase->iniciar()) {
            if ($dataBase->ejecutar($sql)) {  // devuelve true si insertó bien
                $resp = true;
            } else {
                $this->setMensajeOperacion("Persona->insertar: " . $dataBase->getError());
            }
        } else {
            $this->setMensajeOperacion("Persona->insertar: " . $dataBase->getError());
        }
    return $resp;
    }

    // Funcion para modificar una persona
    // Return true si se pudo modificar, false si no
    public function modificar() {
    $resp = false;
    $dataBase = new DataBase();
    $sql = "UPDATE persona SET NroDni = '" . $this->getNroDni() . "',
                                    apellido = '" . $this->getApellido() . "',
                                    Nombre = '" . $this->getNombre() . "',
                                    fechaNac = '" . $this->getFechaNac() . "',
                                    Telefono = '" . $this->getTelefono() . "',
                                    Domicilio = '" . $this->getDomicilio() . "'
                WHERE NroDni = '" . $this->getNroDni() . "'";
    if ($dataBase->iniciar()) {
        if ($dataBase->ejecutar($sql)) {
            $resp = true;
        } else {
            $this->setMensajeOperacion("Persona->modificar: " . $dataBase->getError());
        }
    } else {
        $this->setMensajeOperacion("Persona->modificar: " . $dataBase->getError());
    }
    return $resp;
    }
    // Funcion para eliminar una persona
    // Return true si se pudo eliminar, false si no
    public function eliminar() {
    $resp = false;
    $dataBase = new DataBase();
    $sql = "DELETE FROM persona WHERE NroDni = '" . $this->getNroDni() . "'";
    if ($dataBase->iniciar()) {
        if ($dataBase->ejecutar($sql)) {
            $resp = true;
        } else {
            $this->setMensajeOperacion("Persona->eliminar: " . $dataBase->getError());
        }
    } else {
        $this->setMensajeOperacion("Persona->eliminar: " . $dataBase->getError());
    }
    return $resp;
    }
    // Funcion para listar todas las personas
    // Return un array con todas las personas o null si no hay
    public static function listar($condicion = "") {
        $arregloPersonas = array();
        $dataBase = new DataBase();
        $sql = "SELECT * FROM persona ";
        if ($condicion != "") {
            $sql .= 'WHERE ' . $condicion;
        }
        $res = $dataBase->ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $dataBase->registro()) {
                    $persona = new persona();
                    $persona->setear(
                        $row['NroDni'],
                        $row['Apellido'],
                        $row['Nombre'],
                        $row['fechaNac'],
                        $row['Telefono'],
                        $row['Domicilio']
                    );
                    array_push($arregloPersonas, $persona);
                }
            }
        } else {
            $this->setMensajeOperacion("Persona->listar: " . $dataBase->getError());
        }
        return $arregloPersonas;
    }
}
?>