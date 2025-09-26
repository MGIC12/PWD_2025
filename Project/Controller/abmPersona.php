<?php  
// ABM de Persona (Alta,Baja,Modificacion)
class AbmPersona {
    // Permite buscar un objeto
    public function buscar($param){
        $where = " true ";
        if ($param != null){
            if  (isset($param['nroDni']))
                $where .= " and nroDni = '".$param['nroDni']."'";
            if  (isset($param['apellido']))
                $where .= " and apellido = '".$param['apellido']."'";
            if  (isset($param['nombre']))
                $where .= " and nombre = '".$param['nombre']."'";
            if  (isset($param['fechaNacimiento']))
                $where .= " and fechaNacimiento = '".$param['fechaNacimiento']."'";
            if  (isset($param['numTelefono']))
                $where .= " and numTelefono = '".$param['numTelefono']."'";
            if  (isset($param['domicilio']))
                $where .= " and domicilio = '".$param['domicilio']."'";
        }
        $arreglo = Persona::listar($where);
        return $arreglo;
    }
    // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    private function cargarObjeto ($param){
        $objPersona = null;
        if ( array_key_exists('nroDni',$param) and array_key_exists('apellido',$param) and array_key_exists('nombre',$param) and array_key_exists('fechaNacimiento',$param) and array_key_exists('numTelefono',$param) and array_key_exists('domicilio',$param)){
            $objPersona = new Persona();
            $objPersona->setear(
                $param['nroDni'], 
                $param['apellido'], 
                $param['nombre'], 
                $param['fechaNacimiento'], 
                $param['numTelefono'], 
                $param['domicilio']
            );
        }
        return $objPersona;
    }

    // Corrobora que dentro del arreglo asociativo estan seteados los campos claves
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['NroDni'])){
            $resp = true;
        }
        return $resp;
    }

    // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    private function cargarObjetoConClave($param){
        $objPersona = null;
        if( isset($param['NroDni']) ){
            $objPersona = new Persona();
            $objPersona->setear($param['NroDni'], null, null, null, null, null);
        }
        return $objPersona;
    }

    // permite modificar un objeto
    public function modificacion($param){
        $resp = false;
        $lista = $this->buscar(['NroDni' => $param['nroDni']]);
        if($lista != null){
            $objPersona = $lista[0]; // tomo el primer resultado
            $objPersona ->  setear(
                                $param['nroDni'], 
                                $param['apellido'], 
                                $param['nombre'], 
                                $param['fechaNacimiento'], 
                                $param['telefono'], 
                                $param['domicilio']);
            if ($objPersona->modificar()){
                $resp = true;
            }
        }
    return $resp;
    }
    // permite eliminar un objeto
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objPersona = $this->cargarObjetoConClave($param);
            if ($objPersona != null and $objPersona->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }
    // permite agregar un objeto
    public function alta($param){
        $resp = false;
        $busquedaPersona = ["nroDni" => $param["nroDni"]];
        $existePersona = $this->buscar($busquedaPersona);
        if ($existePersona == null) {
            $objPersona = $this->cargarObjeto($param);
            if ($objPersona !== null && $objPersona->insertar()){
                $resp = true;
            }
        }
        return $resp;
    }
}
?>