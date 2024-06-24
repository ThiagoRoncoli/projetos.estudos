<?php

$v1 = $v2 = $resultado = $operador = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operador = $_POST["operador"];

    if ($operador >= 1 && $operador <= 4) {
        $v1 = $_POST["v1"];
        $v2 = $_POST["v2"];

        switch ($operador) {
            case 1:
                $resultado = $v1 + $v2;
                break;

            case 2:
                $resultado = $v1 - $v2;
                break;

            case 3:
                $resultado = $v1 * $v2;
                break;

            case 4:
                if ($v2 != 0) {
                    $resultado = $v1 / $v2;
                } else {
                    $resultado = "Divisão por zero não é permitida";
                }
                break;
        }
    } else {
        $resultado = "Opção inválida, tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Escolha qual operador você quer trabalhar:<br>
    1 para +<br>
    2 para -<br>
    3 para *<br>
    4 para /<br>
    <br>
    Digite aqui: <input type="text" name="operador"><br>
    <br>
    Digite o primeiro algarismo: <input type="text" name="v1"><br>
    <br>
    Digite o segundo algarismo: <input type="text" name="v2"><br>
    <br>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Seu valor é: $resultado";
}
?>