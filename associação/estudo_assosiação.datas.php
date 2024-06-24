<?php

$meses = array( 
        'Jan' => 'janerio',
        'Feb' => 'fevereiro', 
        'Mar' => 'março', 
        'Apr' => 'abril', 
        'May' => 'maio', 
        'Jun' => 'junho', 
        'Jul' => 'julho',
        'Aug' => 'agosto', 
        'Sep' => 'setembro', 
        'Oct' => 'outubro', 
        'Nov' => 'novembro', 
        'Dec' => 'dezembro');



$semana_traducao = array(
    'Sun' => 'Domingo',
    'Mon' => 'Segundo-Feira',
    'Tue' => 'Terça-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado');

//variaveis de data

$dia = date("d");
$mes = date("M");
$ano = date("Y");
$semana = date("D");

//horário
date_default_timezone_set("America/Sao_Paulo");
$horário = date("H:i:s");

// o que aparece na tela


echo "<br> <h1 style = 'color: red;'> MEU HORÁRIO E DIA </h1> <br>";

echo " Hoje é dia " . $dia . " de ". $meses[$mes] . " de ". $ano;

echo "<br> Nosso horário é: " . $horário;

echo "<br> O nosso dia da semana é: " . $semana_traducao[$semana];

echo "<br> <h1 style = ' color: purple;'> ! FIM ! </h1>";

?>