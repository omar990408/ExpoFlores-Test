<?php
require_once "Horario.php";
session_start();
class Placa {

    private $placa;

    /**
     * @param $placa
     */
    public function __construct($placa)
    {
        $this->placa = $placa;
    }

    /**
     * @return mixed
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function getRestriccion(){
        $placa = $this->getPlaca();
        $digito = substr($placa, -1);
        switch ($digito) {
            case 1:
            case 2:
                $restriccion = "Lunes";
                if (isset($_SESSION['horaInici_12']) && isset($_SESSION['horaFin_12'])){
                    $horaInicio = $_SESSION['horaInici_12'];
                    $horaFin = $_SESSION['horaFin_12'];
                    $horario = new Horario($horaInicio, $horaFin);
                    $restriccion = $restriccion." de ".$horario->getHoraInicio()." a ".$horario->getHoraFin();
                }
                return $restriccion;
            case 3:
            case 4:
                $restriccion = "Martes";
                if (isset($_SESSION['horaInici_34']) && isset($_SESSION['horaFin_34'])){
                    $horaInicio = $_SESSION['horaInici_34'];
                    $horaFin = $_SESSION['horaFin_34'];
                    $horario = new Horario($horaInicio, $horaFin);
                    $restriccion = $restriccion." de ".$horario->getHoraInicio()." a ".$horario->getHoraFin();
                }
                return $restriccion;
            case 5:
            case 6:
                $restriccion = "Miércoles";
                if (isset($_SESSION['horaInici_56']) && isset($_SESSION['horaFin_56'])){
                    $horaInicio = $_SESSION['horaInici_56'];
                    $horaFin = $_SESSION['horaFin_56'];
                    $horario = new Horario($horaInicio, $horaFin);
                    $restriccion = $restriccion." de ".$horario->getHoraInicio()." a ".$horario->getHoraFin();
                }
                return $restriccion;
            case 7:
            case 8:
                $restriccion = "Jueves";
                if (isset($_SESSION['horaInici_78']) && isset($_SESSION['horaFin_78'])){
                    $horaInicio = $_SESSION['horaInici_78'];
                    $horaFin = $_SESSION['horaFin_78'];
                    $horario = new Horario($horaInicio, $horaFin);
                    $restriccion = $restriccion." de ".$horario->getHoraInicio()." a ".$horario->getHoraFin();
                }
                return $restriccion;
            case 9:
            case 0:
                $restriccion = "Viernes";
                if (isset($_SESSION['horaInici_90']) && isset($_SESSION['horaFin_90'])){
                    $horaInicio = $_SESSION['horaInici_90'];
                    $horaFin = $_SESSION['horaFin_90'];
                    $horario = new Horario($horaInicio, $horaFin);
                    $restriccion = $restriccion." de ".$horario->getHoraInicio()." a ".$horario->getHoraFin();
                }
            return $restriccion;
            default:
                $restriccion = "No hay restricción";
                return $restriccion;
        }
    }



}

