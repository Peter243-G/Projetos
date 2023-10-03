<?php
/*
    Arrays
    */

// Colocando o indice antes do nome do elemento
$carros = array(1 => "BMW", 2 => 'Veloster', 3 => 'Hilux');
$carros[] = "Amarok";
$carros[10] = "Camaro"; // Inserindo elemento com a posição

// usamos o comando print_r() para exibir arrays
print_r($carros);

// echo $carros[1]."<br>";
// echo $carros[2]."<br>";
// echo $carros[3]."<br>";

echo "<hr>";
// Segunda maneira de criar arrays
$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Kawasaki";
$motos[] = "Susuki";

print_r($motos);


echo "<hr>";
// Terceira maneira de criar arrays
$clientes = ["Peterson", "Gabriel", "Hiago", "Antonio", "Maria", "Ana", "Josefa"];

print_r($clientes);

echo "<hr>";

// Exibindo a quantidade de elementos de um array (count())

echo 'Quantidade de Carros: ' . count($carros) . "<br>";
echo 'Quantidade de Motos: ' . count($motos) . "<br>";
// echo 'Quantidade de Clientes: ' . count($clientes) . "<br>";

// Posso atribuir o valor para uma variável
$totalClientes = count($clientes);
echo 'Quantidade de Clientes: ' . $totalClientes . "<br>";

echo "<hr>";

// Percorrendo arrays (foreach())

// Cada elemento do array $carros será atribuido à variável $valor

foreach ($carros as $valor) {
    echo $valor . "<br>";
}

echo "<hr>";

foreach ($motos as $valor) {
    echo $valor . "<br>";
}

echo "<hr>";

foreach ($clientes as $valor) {
    echo $valor . "<br>";
}

echo "<hr>";

// Arrays Associativos = é quando os indices ou as chaves são strings

$pessoas = array("nome" => "Peterson", "idade" => 20, "altura" => 1.65);
$pessoas["cidade"] = "Apucarana";
// print_r($pessoas);
// echo $pessoas["nome"];
foreach ($pessoas as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";

// Arrays Multidimensionais

$linguagens = array(
    "front-end" => array("primeiro" => "HTML", "segundo" => "CSS", "terceiro" => "Javascript"),
    "back-end" => array("PHP", "MySQL"),
    "data-science" => array("Python", "Java", "Julia", "Scala")
);

// print_r($linguagens);
// echo $linguagens["front-end"][0] . "<br>";
// echo $linguagens["back-end"][1] . "<br>";
// echo $linguagens["data-science"][2] . "<br>";

foreach ($linguagens["front-end"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

echo "<hr>";
