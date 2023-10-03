<?php
// Métodos $_GET e $_POST
// $_GET = Pega dados pela URL
// $_POST = Pega dados pela Requisição HTTP

// echo "Métodos para pegar dados.<br>";
// echo "User: {$_POST["nome"]}<br>";
// echo "Password: {$_POST["senha"]}";

// método get é menos seguro por mostrar na url as informações

$item = "pizza";
$price = 60.59;
$quantity = $_GET["qtd"];
$total = null;

$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}<br>";
echo "You total is R$ {$total}";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos GET & POST</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- <form action="get_post.php" method="post">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Login">
    </form> -->



    <form action="get_post.php" method="get">
        <label for="">quantity</label><br>
        <input type="text" name="qtd">
        <input type="submit" value="total">
    </form>
</body>

</html>