<?php
//Tipos de dados Escalares


//string
$texto = "Peterson";
var_dump($texto);
// Retorna o tamanho e o tipo da variavel

// verifica se a variavel é uma string
if (is_string($nome)) {
    echo "<br>É uma string<br>";
} else {
    echo "<br>Não é uma string<br>";
}

echo "<hr>";

//int
$idade = 20;
var_dump($idade);

// verifica se a variavel é inteiro
if (is_int($idade)) :
    echo "<br>" . "É um inteiro" . "<br>";
else :
    echo "<br>" . "Não é um inteiro" . "<br>";
endif;

echo "<hr>";

//float 

$peso = 60.4;
var_dump($peso);

// verifica se a variavel é um float
if (is_float($peso)) {
    echo "<br>" . "É um float" . "<br>";
} else {
    echo "<br>" . "Não é um float" . "<br>";
}

echo "<hr>";

// boolean

$admin = true;
var_dump($admin);
//verifica se a variavel é booleano
if (is_bool($admin)) :
    echo "<br>É um boolean<br>";
else :
    echo "<br>Não é um boolean<br>";
endif;

echo "<hr>";


// Tipos de dados Compostos

//Arrays

$carros = array("Uno", "Gol", "Classic", "Mustang", 12, 20.6, true);
var_dump($carros);

echo "<hr>";

//Objects

class Cliente
{
    public $nome;
    public function atribuirNome($nome)
    {
        // self.nome = nome (Python)
        $this->$nome = $nome;
    }
}

//Instanciamos a classe cliente
$cliente = new Cliente();
// Usando o método = Cliente.atribuirNome() (Python)
$cliente->atribuirNome("Peterson");
var_dump($cliente);

// verifica se a variavel é uma string
if (is_object($cliente)) {
    echo "<br>É um Objeto<br>";
} else {
    echo "<br>Não é um Objeto<br>";
}

echo "<hr>";


// Especiais

//NULL
$cidade = NULL;
var_dump($cidade);

echo "<hr>";

// Resource - conexão com BD , manipulação de arquivos