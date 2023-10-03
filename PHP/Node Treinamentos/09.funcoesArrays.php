<?php

/* Funções de Arrays
 * is_array() - verifica se uma variável é array
 * is_array($valor, $array) - verifica se um valor exite em alguma posição do array
 * array_keys($array) - retorna um novo array com as chaves do array passado como parâmetro
 * array_values($array) - retorna um novo array com os valores do array passado como parâmetro
 * array_merge($array1,$array2) - agrega o conteúdo dos dois arrays
 * array_pop($array) - exclui a última posição do array
 * array_shift($array) - exclui a primeira posição do array
 * array_unshift($array,"valor") - adiciona um ou mais valores no inicio do array
 * array_push($array,"valor","valor") - adiciona um ou mais valores no final do array
 * array_combine($keys,$values) - mescla os dois arrays passados
 * array_sum() - calcula a soma dos elementos de um array
 * explode("/", "24/04/2003") - transforma uma string em array
 * implode("-", $array) - transforma um array em string
 */


echo "Aprendendo as funções de arrays!<br>";
$nomes = array("Peterson", "Felipe", "Maria", "Ana");

// if (is_array($nomes)) {
//     echo "é um array";
// } else {
//     echo "não é uma array";
// }


echo in_array("Peterson", $nomes); // Este valor existe no array

if (in_array("Maria", $nomes)) {
    echo "<br>Existe no array";
} else {
    echo "<br>Não existe no array";
}
