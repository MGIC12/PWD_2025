<?php
$horasPWDL = $_GET["horasL"];
$horasPWDM = $_GET["horasM"];
$horasPWDMi = $_GET["horasMi"];
$horasPWDJ = $_GET["horasJ"];
$horasPWDV = $_GET["horasV"];

$horasPWD = array($horasPWDL, $horasPWDM, $horasPWDMi, $horasPWDJ, $horasPWDV);
$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

$horasPWDarray = "<h1>Horas cursadas por día:</h1><hr><br>";
for ($i = 0; $i < count($horasPWD); $i++){
    $horasPWDarray .= $dias[$i] . ": " . $horasPWD[$i] . " horas <br>";
}

$horasTotal = $horasPWDL + $horasPWDM + $horasPWDMi + $horasPWDJ + $horasPWDV;
echo $horasPWDarray . "<br>";
echo "El total de horas cursadas por semana es de: " . $horasTotal." horas";

?>