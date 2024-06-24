<?php


$n1 = $_GET ["Numero"] ?? 0;
echo "Digite um número: $n1 " . "<br>";

$n2 = $_GET ["Segundo Numero"] ?? 0;
echo"Digite o segundo número para dividir: $n2 " . "<br>" ;



$resultado = $n1 / $n2;
echo "Seu resultado é: " . "<strong>" . $resultado . "</strong><br>";


echo "Seu primeiro número digitado: $n1 é chamado de: <strong>(Dividendo)</strong>.<br>";

echo "Seu segundo número digitado: $n2 é chamado de: <strong>(Divisor)</strong>.<br>";

echo "O seu resultado $resultado é denominado de: <strong>(Quociente)</strong>.<br>";

$resto = ($n1 % $n2);
echo "O resto $resto se chama de: <strong>(Resto)</strong>.";



?>
