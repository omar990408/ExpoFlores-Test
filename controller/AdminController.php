<?php
require_once "../model/Placa.php";
require_once "../model/Horario.php";
require_once "../helpers/constantes.php";
session_start();

if (isset($_POST)) {
    if ($_POST['usuario'] == USER && $_POST['clave'] == CLAVE) {
        $_SESSION['login'] = true;
        header("Location:../views/horarios/adminPage.php");
    }else{
        $_SESSION['login'] = false;
        header("Location:../views/horarios/login.php");
    }

}else{
    $_SESSION['login'] = false;
    header("Location:../views/horarios/login.php");
}
