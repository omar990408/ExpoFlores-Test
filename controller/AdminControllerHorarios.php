<?php
require_once "../model/Placa.php";
require_once "../model/Horario.php";
require_once "../helpers/constantes.php";
session_start();
var_dump($_POST);
if (isset($_POST)){
    $_SESSION['horaInici_12'] = isset($_POST['horaInicio1_2']) ? $_POST['horaInicio1_2'] : false;
    $_SESSION['horaFin_12'] = isset($_POST['horaFin1_2']) ? $_POST['horaFin1_2'] : false;
    $_SESSION['horaInici_34'] = isset($_POST['horaInicio3_4']) ? $_POST['horaInicio3_4'] : false;
    $_SESSION['horaFin_34'] = isset($_POST['horaFin3_4']) ? $_POST['horaFin3_4'] : false;
    $_SESSION['horaInici_56'] = isset($_POST['horaInicio5_6']) ? $_POST['horaInicio5_6'] : false;
    $_SESSION['horaFin_56'] = isset($_POST['horaFin5_6']) ? $_POST['horaFin5_6'] : false;
    $_SESSION['horaInici_78'] = isset($_POST['horaInicio7_8']) ? $_POST['horaInicio7_8'] : false;
    $_SESSION['horaFin_78'] = isset($_POST['horaFin7_8']) ? $_POST['horaFin7_8'] : false;
    $_SESSION['horaInici_90'] = isset($_POST['horaInicio9_0']) ? $_POST['horaInicio9_0'] : false;
    $_SESSION['horaFin_90'] = isset($_POST['horaFin9_0']) ? $_POST['horaFin9_0'] : false;
    header("Location:../views/placa/ingreso.php");
}