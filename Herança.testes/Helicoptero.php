<?php

include_once("Aeronave.php");

class Helicoptero extends Aeronave{


    public $assento;

    public function __construct($modelo, $assento, $Loc_embarque, $destino){

        parent::__construct($modelo, $assento, $Loc_embarque, $destino);

        $this->assento = $assento;
    }

    public function getAssento()
    {
        return $this->assento;
    }

    public function setAssento($assento)
    {
        $this->assento = $assento;
    }
}
