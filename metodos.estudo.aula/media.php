<?php


$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

function mediaNotas($nota1, $nota2, $nota3, $nota4){
    $notas = array($nota1, $nota2, $nota3, $nota4);
    $soma = array_sum($notas);
    $media = $soma /  sizeof($notas);
echo "Sua média é:<strong>$media</strong>";

}


mediaNotas($nota1, $nota2, $nota3, $nota4);

if($media >= 7){
    echo "Você passou de ano!";
}else{
    echo "Você não passou de ano!";
}
?>