<?php
$horasPWDL = $_GET["horasL"];
$horasPWDM = $_GET["horasM"];
$horasPWDMi = $_GET["horasMi"];
$horasPWDJ = $_GET["horasJ"];
$horasPWDV = $_GET["horasV"];

$horasPWD = array($horasPWDL, $horasPWDM, $horasPWDMi, $horasPWDJ, $horasPWDV);
$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

$horasPWDarray = "Horas cursadas por día: <br>";
for ($i = 0; $i < count($horasPWD); $i++){
    $horasPWDarray .= $dias[$i] . ": " . $horasPWD[$i] . "<br>";
}

$horasTotal = $horasPWDL + $horasPWDM + $horasPWDMi + $horasPWDJ + $horasPWDV;
echo $horasPWDarray . "<br>";
echo "El total de horas cursadas es: " . $horasTotal;

?>