<?php
$men = "";
$parques = array();

if (empty($_POST['name'])) {
    $men = "No se ha ingresado un parque a buscar.";
} else {
    include('../Model/ModelCRUDParque.php');
    $name = $_POST['name'];
    $objparque = new ModelCRUDParque();
    $parques = $objparque->searchPC($name);

    if (empty($parques)) {
        $men = "No se encontraron resultados";
    }
}

include('../View/resultView.php');
