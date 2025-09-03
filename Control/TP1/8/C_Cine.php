<?php
Class C_Cine{

 public function calcular_precio_entrada($datos){
        $precio =0;
        $edad = $datos['edad'];
        $estudiante = $datos['estudios'];
        if ($edad < 12){
            $precio = 160;
        } elseif ($estudiante == 1 && $edad >= 12) {
            $precio = 180;
        } else {
            $precio = 300;
        }
 return $precio;
}
}
?>
