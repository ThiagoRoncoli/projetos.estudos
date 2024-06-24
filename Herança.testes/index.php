<?php
include_once("Aeronave.php");
include_once("Aviao.php");
include_once("Helicoptero.php");


$aviao = new Aeronave("<strong> Gol</strong>.", "<strong> 110 pessoas</strong>.", 
"<strong> Aeroporto de Porto Alegre</strong>.", "<strong> São Paulo</strong>.");



    //echo "Modelo do Avião: " .  $aviao->getModelo() .
    //"Com capacidade de até: " . $aviao->getCapacidade().
    //"Tendo o local de embarque no: " . $aviao->getLocEmbarque().
    //"E com o destino final em: " . $aviao->getDestino();

// embaixo ta de outra forma de escrevar colocando as variáveis no meio de texto.
// se quiser mudar a forma de escrever só deixar como comentário e tirar do comentário em cima.
// e teria que colocar os <br> depois dos pontos finais no new aeronave para deixar com espaçamento correto.

    $aviao->getModelo();
    $aviao->getCapacidade();
    $aviao->getLocEmbarque();
    $aviao->getDestino();

echo "<br>O avião será do modelo: " . $aviao->getModelo(). "<br>" .
"Tendo a capacidade de: " . $aviao->getCapacidade() . "<br>" .
"Com o local de embarque no: " . $aviao->getLocEmbarque() . "<br>".
"Tendo o destino final em: ". $aviao->getDestino();



$helicoptero = new Helicoptero("<strong> Airbus</strong>.", "<strong> 4 assentos</strong>.",
 "<strong> Heliponto de Porto Alegre</strong>. " , "<strong> Viamão</strong>.");



    $helicoptero->getModelo();
    $helicoptero->getAssento();
    $helicoptero->getLocEmbarque();
    $helicoptero->getDestino();



    echo "<hr><br>O Helicóptero será do modelo: " . $helicoptero->getModelo(). "<br>" .
"Tendo a capacidade de: " . $helicoptero->getAssento() . "<br>" .
"Com o local de embarque no: " . $helicoptero->getLocEmbarque() . "<br>".
"Tendo o destino final em: ". $helicoptero->getDestino();







?>
