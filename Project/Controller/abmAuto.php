<?php 
// ABM de Auto (Alta,Baja,Modificacion)
// Atributos de auto: Patente,marca,modelo,DniDuenio (4)
class AbmAuto {
    // Permite buscar un objeto
    public function buscar($param)
    {
        $where = " true ";
        if ($param != null) {
            if (isset($param['patente']))
                $where .= " and patente = '".$param['patente']."'";
            if (isset($param['marca']))
                $where .= " and marca = '".$param['marca']."'";
            if (isset($param['modelo']))
                $where .= " and modelo = '".$param['modelo']."'";
            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio = '".$param['DniDuenio']."'";
        }
        $arreglo = Auto::listar($where);
        // ✅ Si viene vacío, devuelvo null
        if (empty($arreglo)) {
            $arreglo = null;
        }
        return $arreglo;
    }
    // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
    private function cargarObjeto ($param){
        $objAuto = null;
        if (array_key_exists('patente',$param) and
        array_key_exists('marca',$param) and
        array_key_exists('modelo',$param) and
        array_key_exists('nroDniDuenio',$param)){
            $objAuto = new Auto();
            $objAuto->setear(
                $param['patente'],
                $param['marca'],
                $param['modelo'],
                $param['nroDniDuenio']
            );
        }
        return $objAuto;
    }
    // Corrobora que dentro del arreglo asociativo estan seteados los campos claves
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['Patente'])){
            $resp = true;
        }
        return $resp;
    }
    // Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
    private function cargarObjetoConClave($param){
        $objAuto = null;
        if (isset($param['Patente'])){
            $objAuto = new Auto();
            $objAuto->setear($param['Patente'],null,null,null);
        }
        return $objAuto;
    }
    // permite modificar un objeto
    public function modificacion($param){
    $resp = false;
    $lista = $this->buscar(['patente' => $param['patente']]);
    if ($lista != null){
        $objAuto = $lista[0]; // tomo el primer resultado
        $objAuto->setear(
            $param['patente'],
            $param['marca'],
            $param['modelo'],
            $param['nroDniDuenio']
        );
        if ($objAuto->modificar()){
            $resp = true;
        }
    }
    return $resp;
    }
    // Restantes: baja,alta
    // Permite eliminar un objeto
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objAuto = $this->cargarObjetoConClave($param);
            if ($objAuto != null and $objAuto->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }
    // Permite agregar un objeto
    public function alta($param){
        $resp = false;
        $busquedaAuto = ["patente" => $param["patente"]];
        $existeAuto = $this->buscar($busquedaAuto);
        if ($existeAuto == null){
            $objAuto = $this->cargarObjeto($param);
            if ($objAuto->insertar()){
                $resp = true;
            }
        }
        return $resp;
    }
}
?>