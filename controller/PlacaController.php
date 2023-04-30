<?php
require_once "../model/Placa.php";
require_once "../model/Horario.php";
session_start();
if (isset($_POST)) {
    var_dump($_POST);
    $placa = isset($_POST['placa']) ? $_POST['placa'] : false;
    var_dump($placa);
    if ($placa) {
        $placa = new Placa($placa);
        $restriccion = $placa->getRestriccion();
        $mensaje = "La placa ".$placa->getPlaca()." tiene restricción el día $restriccion";
        var_dump($mensaje);
        $_SESSION['mensaje'] = $mensaje;
    }
    header("Location:../views/placa/ingreso.php");
}