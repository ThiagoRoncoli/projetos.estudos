<?php


class Aeronave
{
    private $modelo;
    private $capacidade;
    private $Loc_embarque;
    private $destino;

    public function __construct($modelo, $capacidade, $Loc_embarque, $destino)
    {

        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
        $this->Loc_embarque = $Loc_embarque;
        $this->destino = $destino;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;
    }

    public function getLocEmbarque()
    {
        return $this->Loc_embarque;
    }

    public function setLocEmbarque($Loc_embarque)
    {
        $this->Loc_embarque = $Loc_embarque;
    }

    public function getDestino()
    {
        return $this->destino;
    }
    
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }
}
