<?php


$numero = $_GET["numero"] ?? "você não colocou o número!";


$numero_ant = $numero - 1;
$numero_suc = $numero + 1;


echo "Você digitou: <strong>$numero</strong><br>";

echo "E seu número antecessor é: <strong>$numero_ant</strong><br> ";

echo "Seu número sucessor é: <strong>$numero_suc</strong>";


?>