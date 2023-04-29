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
        $horario = new Horario("6:00", "9:30");
        $horario2 = new Horario("16:00", "20:00");
        $mensaje = "La placa ".$placa->getPlaca()." tiene restricción el día $restriccion de ".$horario->getHoraInicio()." a ".$horario->getHoraFin()." y de ".$horario2->getHoraInicio()." a ".$horario2->getHoraFin();
        var_dump($mensaje);
        $_SESSION['mensaje'] = $mensaje;
    }
    header("Location:../views/placa/ingreso.php");
}