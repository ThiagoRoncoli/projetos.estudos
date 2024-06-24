<?php

include_once("cls.Veiculo.php");

class Carro extends Veiculo{
    public $portas;

public function __construct($marcaCarrro, $modeloCarro, $portas){
    parent::__construct($marcaCarrro, $modeloCarro);

    $this->portas = $portas;
    }

}

?>