<?php
session_start();
if (isset($_SESSION["mantener_sesion"]) && isset($_SESSION["login"]) ) {
    $_SESSION["mantener_sesion"] = null;
    $_SESSION["login"] = null;
    unset($_SESSION["login"]);
    unset($_SESSION["mantener_sesion"]);
    header("Location:../views/horarios/login.php");
}
