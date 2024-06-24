<?php

include_once("cls.Veiculo.php");


class Moto extends Veiculo{
    public function __construct($marcaMoto, $modeloMoto){
        parent::__construct($marcaMoto, $modeloMoto);        
}

}



?>