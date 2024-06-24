<?php

Class Veiculo{

    public $marca;
    public $modelo;

    public function __construct($marca, $modelo){

    $this -> marca = $marca;

    $this -> modelo = $modelo;

    echo"<br>Marca: " . "<strong>" . $this -> marca . "</strong>";
    echo"<br>Modelo: " . "<strong>" . $this -> modelo . "</strong>";
    }


}


?>