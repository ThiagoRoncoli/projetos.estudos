<?php

$comidas = array("Banana", "maça", "morango", "jabuticaba", "ameixa", "ovo", "arroz", "feijão", "uva", "carne");


$size = count($comidas);

for($i = 0; $i < $size; $i++){
    echo $comidas[$i] . "<br>";
}
?>

<hr>

<?php


$frutas = array("Banana", "Maçã", "Ameixa", "Uva");
$comidas = array("carne", "arrroz", "feijão", "beterraba");

foreach($frutas as $lista){
    echo $lista . "<br>";
}

echo "<br>Lista de comida <br>";

foreach($comidas as $lista){
    echo $lista . "<br>";
}

?>
<hr>



<?php

echo "Calculos matemáticos <br>";

$v1 = 5;
$v2 = $v1 * 0.1;

$v1 += $v2;

echo "$v1";



?>

<hr>


<?php

$pararloop = 9;

for($numero = 0; ;$numero++){
    if($numero == $pararloop){
        break;
    }
    echo $numero . "<br>";

    }
    


?>


<hr>


<?php


for( $contador = 0; $contador <= 10; $contador ++ ){
    echo "Tabuada 9 x $contador = " . ($contador * 9) . "<br>";
}






?>

<hr>

<?php



$numeros = array("1", "2" , "3", "4", "5", "6", "7");

foreach( $numeros as $numeros){
    echo "seus números são: $numeros" . "<br>";
}


?>

<hr>

<?php



$numeros = array("1", "2", "3", "4", "5");

$size = count($numeros);

for( $i = 0; $i < $size; $i++){
    echo $numeros[$i] . "<br>";
}


echo "<hr>";


$lista = array("oi", "ola", "blz", "ok");

$size = count($lista);

for($i = 0; $i < $size; $i++){
    echo $lista[ $i ] . "<br>";
}

echo "<hr>";


$numeros = array(1, 2 , 3, 4, 5, 6, 7, 8, 9, 10);

$size = count($numeros);

for($i = 0; $i < $size; $i++){

switch($numeros [$i]){

    case '2':
    case '4':
    case '6':
    case '8':
    case '10':

if( $numeros [$i] %2 == 0 ){
    echo $numeros [$i] . " é par <br>";
break;
}
default:
echo $numeros [$i] . " é impar <br>";
break;

}
}

echo "<hr>";

$lista_a = array(2,4,6,8,10);

$size  = count($lista_a);

for($i = 0; $i < $size; $i++){
    echo $lista_a[$i] . "<br>";
}
?>

