<?php 
function data_submitted()
{
    $requestData = array();

    if (!empty($_POST)) {
        $requestData = $_POST;
    } elseif (!empty($_GET)) {
        $requestData = $_GET;
    }
    if (!empty($_FILES)) {
        foreach ($_FILES as $indice => $archivo) {
            $requestData[$indice] = $archivo;
        }
    }
    if (count($requestData)) {
        foreach ($requestData as $indice => $valor) {
            if ($valor === "") {
                $requestData[$indice] = 'null';
            }
        }
    }
    return $requestData;
}


function verEstructura($e)
{
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}


?>