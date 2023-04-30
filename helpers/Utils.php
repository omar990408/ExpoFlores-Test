<?php
session_start();
class Utils
{
    public static function deleteSession($name)
    {
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function Horarios(){
        $_SESSION['horaInici_12'] = "6:00";
        $_SESSION['horaFin_12'] = "9:30";
        $_SESSION['horaInici_34'] = "6:00";
        $_SESSION['horaFin_34'] = "9:30";
        $_SESSION['horaInici_56'] = "6:00";
        $_SESSION['horaFin_56'] = "9:30";
        $_SESSION['horaInici_78'] = "6:00";
        $_SESSION['horaFin_78'] = "9:30";
        $_SESSION['horaInici_90'] = "6:00";
        $_SESSION['horaFin_90'] = "9:30";
    }
}