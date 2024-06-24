<?php

include_once("cls.Veiculo.php");
include_once("cls.Carro.php");
include_once("cls.Moto.php");



$v1 = new Veiculo("Bmw", "M4");
echo"<hr>";

$v2 = new Veiculo("Mercedez", "CLA 45");
echo "<hr>";

$m1 = new Veiculo("Bmw", "S1000rr");
echo "<hr>";

$m2 = new Veiculo("Hornet", "CB 1000");
echo"<hr>";



?>