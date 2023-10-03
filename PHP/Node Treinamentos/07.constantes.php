<?php
// Constantes

/*
    Usaremos o comando define(<nome_da_constante>, <valor>)
    OS identificadores das cosntantes são sempre em letras maiusculas 
    Constantes automaticamente são globais*/

define("NOME", "Peterson Gabriel");
define("IDADE", 20);
define("ALTURA", 1.65);
define("CASADO", false);
var_dump(NOME);
var_dump(IDADE);
var_dump(ALTURA);
var_dump(CASADO);

// colocando um array com constante
define("LINGUAGENS", ['HTML', 'PHP', 'CSS', 'JAVASCRIPT', 'PYTHON', 'JAVA', 'C', 'C++', 'C#', 'MySQL']);
echo "<hr>";
echo 'Meu nome é ' . NOME . ' e minha idade é ' . IDADE . ' e minha altura é ' . ALTURA . '.<br>';

echo 'Estas são as linguagens que conheço: <br>';
foreach (LINGUAGENS as $linguagens) {
    echo $linguagens . "<br>";
}


function exibeNome() {
    echo NOME;
}
ExibeNome();
