<?php
$nome = "Peterson";
$idade = 20;
$peso = 60.3;
$altura = 1.65;
$idade = 20;
$email = "fake@gmail.com";
$preco = 2.99;

$imc = $peso / ($altura ** 2);


echo "Seja bem vindo {$nome}. <br>seu imc é de {$imc}.<br>Your email is {$email}" ;
echo "<br>Você tem {$idade} anos.<br>";

if($idade < 18) {
    echo "<br>Você não pode passar";
}else {
    echo "<br>Seja bem vindo {$nome}";
}

echo "<br>Este é o preço: R$ {$preco}";

?>
