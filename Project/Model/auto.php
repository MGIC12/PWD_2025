<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/PWD_2025/project/model/conector/dataBase.php';
class auto {
    // Atributos de la clase
    // Por cada columna de la tabla en la base de datos
    private $Patente;
    private $Marca;
    private $Modelo;
    private $NroDniPropietario;
    private $mensajeOperacion;

    // constructor de la clase
    public function __construct() {
        $this->Patente = "";
        $this->Marca = "";
        $this->Modelo = "";
        $this->NroDniPropietario = "";
        $this->mensajeOperacion = "";
    }
    // getters
    public function getPatente() {
        return $this->Patente;
    }
    public function getMarca() {
        return $this->Marca;
    }
    public function getModelo() {
        return $this->Modelo;
    }
    public function getNroDniPropietario() {
        return $this->NroDniPropietario;
    }
    public function getMensajeOperacion(){
        return $this->mensajeOperacion ;
    }

    // setters
    public function setPatente($Patente) {
        $this->Patente = $Patente;
    }
    public function setMarca($Marca) {
        $this->Marca = $Marca;
    }
    public function setModelo($Modelo) {
        $this->Modelo = $Modelo;
    }
    public function setNroDniPropietario($NroDniPropietario) {
        $this->NroDniPropietario = $NroDniPropietario;
    }
    public function setMensajeOperacion($mensajeOperacion){
        $this->mensajeOperacion = $mensajeOperacion;
    }
    // Funcion para setear todos los atributos de la clase
    public function setear($Patente, $Marca, $Modelo, $NroDniPropietario){
        $this->setPatente($Patente);
        $this->setMarca($Marca);
        $this->setModelo($Modelo);
        $this->setNroDniPropietario($NroDniPropietario);
    }
    // Método para representar el objeto como una cadena
    public function __toString() {
        // Guardamos todos los atributos en variables locales
        $patente = $this->getPatente();
        $Marca = $this->getMarca();
        $Modelo = $this->getModelo();
        $NroDniPropietario = $this->getNroDniPropietario();
        // Retornamos una cadena con la información del objeto
        return (
            "Patente: $patente, " .
            "Marca: $Marca, " .
            "Modelo: $Modelo, " .
            "NroDniPropietario: $NroDniPropietario"
        );
    }
    // 5 funciones (buscar,listar,insertar,modificar,eliminar) -> phpMyAdmin
    // Funcion para buscar un auto por su patente en la base de datos
    // Return el objeto auto si se encontró, null si no
    public function cargar(){
        $resp = false;
        $dataBase = new DataBase();
        $sql = "SELECT * FROM auto WHERE Patente = ".$this->getPatente(); 
        if ($dataBase->iniciar()) {
            $res = $dataBase->ejecutar($sql);
            if ($res>-1) {
                if ($res>0) {
                    $row = $dataBase->registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    $resp = true;
                }
            }
        } else {
            $this->setMensajeOperacion("auto->cargar: " . $dataBase->getError());
        }
        return $resp;
    }
    // Funcion para insertar un nuevo auto
    // Return true si se pudo insertar, false si no
    public function insertar(){
        $resp = false;
        $dataBase = new DataBase();
        $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) 
                        VALUES ('" . $this->getPatente() . "',
                                '" . $this->getMarca() . "',
                                '" . $this->getModelo() . "',
                                '" . $this->getNroDniPropietario() . "')";
        if ($dataBase->iniciar()) {
            if ($dataBase->ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->insertar: " . $dataBase->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->insertar: " . $dataBase->getError());
        }
        return $resp;
    }
    // Funcion para modificar un auto
    // Return true si se pudo modificar, false si no
    public function modificar(){
        $resp = false;
        $dataBase = new DataBase();
        $sql = "UPDATE auto 
                        SET Marca = '" . $this->getMarca() . "',
                            Modelo = '" . $this->getModelo() . "',
                            DniDuenio = '" . $this->getNroDniPropietario() . "'
                        WHERE Patente = '" . $this->getPatente() . "'";
        if ($dataBase->iniciar()) {
            if ($dataBase->ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->modificar: " . $dataBase->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->modificar: " . $dataBase->getError());
        }
        return $resp;
    }
    // Funcion para eliminar un auto
    // Return true si se pudo eliminar, false si no
    public function eliminar(){
        $resp = false;
        $dataBase = new DataBase();
        $sql = "DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "'";
        if ($dataBase->iniciar()) {
            if ($dataBase->ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setMensajeOperacion("auto->eliminar: " . $dataBase->getError());
            }
        } else {
            $this->setMensajeOperacion("auto->eliminar: " . $dataBase->getError());
        }
        return $resp;
    }
    // Funcion para listar todos los autos
    // Return un array con todos los autos o null si no hay
        public static function listar($condicion = "")
    {
        $arreglo = array();
        $base = new dataBase();
        $sql = "SELECT * FROM Auto ";

        if ($condicion != "") {
            $sql .= 'WHERE ' . $condicion;
        }

        $res = $base->Ejecutar($sql);

        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            $this->setMensajeOperacion("usuarios->seleccionar: " . $base->getError());
        }

        return $arreglo;
    }
}
?>