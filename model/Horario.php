<?php

class Horario
{
    private $horaInicio;
    private $horaFin;

    public function __construct($horaInicio, $horaFin)
    {
        $this->horaInicio = $horaInicio;
        $this->horaFin = $horaFin;
    }

    /**
     * @return mixed
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * @param mixed $horaInicio
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    }

    /**
     * @return mixed
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * @param mixed $horaFin
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;
    }



}