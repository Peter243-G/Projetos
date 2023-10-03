<?php
function  par_impar($number)
{

    return $number % 2;
}


echo par_impar(15);

function hipotenusa(float $a, float  $b)
{

    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo "<br><br>";

echo hipotenusa(4, 3);
