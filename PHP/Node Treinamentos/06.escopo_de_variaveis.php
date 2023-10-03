<?php
    /**Estudaremos agora escopo de variáveis */


    // ESCOPO GLOBAL
    $nome = "Peterson gabriel";
    $a = 1;
    $b = 6;
    $c = 3;

    function exibeNome() {
        // ESCOPO LOCAL
        // Definindo a variáve como global
        global $nome;
        echo $nome;
    }

    exibeNome();

    echo "<hr>";

    function exibeCidade() {
        // ESCOPO LOCAL
        // Definindo a variavel como global para acessar fora da função
        global $cidade;
        $cidade = "Apucarana";
    }

    exibeCidade();
    echo $cidade;
    echo "<hr>";

    ///////////////////////////

    function soma() {
        // Podemos definir estas variaveis como globais usando o array globa do PHP, array associativo
        echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c']; 

        // echo $a + $b + $c;
    }

    soma();
