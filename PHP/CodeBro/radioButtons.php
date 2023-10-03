<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>

<body>



    <form action="radioButtons.php" method="post">
        <input type="radio" name="cartao_credito" value="Visa">
        Visa <br>
        <input type="radio" name="cartao_credito" value="Mastercard">
        Mastercard <br>
        <input type="radio" name="cartao_credito" value="Itau">
        Itau <br>

        <input type="submit" value="Confirm" name="confirm">

    </form>
</body>

</html>

<?php

if (isset($_POST["confirm"])) {

    $cartao_credito = null;

    if (isset($_POST["cartao_credito"])) {
        $cartao_credito = $_POST["cartao_credito"];
    }
    // echo $cartao_credito;
    // if ($cartao_credito == "Visa") {
    //     echo "Opção Selecionada: " . $cartao_credito;
    // } elseif ($cartao_credito == "Visa") {
    //     echo "Opção Selecionada: " . $cartao_credito;
    // } elseif ($cartao_credito == "Mastercard") {
    //     echo "Opção Selecionada: " . $cartao_credito;
    // } elseif ($cartao_credito == "Itau") {
    //     echo "Opção Selecionada: " . $cartao_credito;
    // } else {
    //     echo "Selecione uma opção.";
    // }

    switch ($cartao_credito) {
        case "Visa":
            echo "Selecionou Visa";
            break;
        case "Mastercard":
            echo "Selecionou Mastercard";
            break;
        case "Itau":
            echo "Selecionou Itau";
            break;
        default:
        echo "nenhuma opção selecionada";
    }
}


?>