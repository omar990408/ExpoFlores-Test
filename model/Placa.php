<?php

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
                return $restriccion;
                break;
            case 3:
            case 4:
                $restriccion = "Martes";
                return $restriccion;
                break;
            case 5:
            case 6:
                $restriccion = "Miércoles";
                return $restriccion;
                break;
            case 7:
            case 8:
                $restriccion = "Jueves";
                return $restriccion;
                break;
            case 9:
            case 0:
                $restriccion = "Viernes";
            return $restriccion;
                break;
            default:
                $restriccion = "No hay restricción";
                return $restriccion;
                break;
        }
    }



}

