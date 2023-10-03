<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- <form action="mathFunctions.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x" /><br>
        <label for="">y:</label>
        <input type="text" name="y" /><br>
        <label for="">z:</label>
        <input type="text" name="z" /><br>
        <input type="submit" value="total">
    </form> -->

    <form action="mathFunctions.php" method="post">
        <label for="">radius:</label>
        <input type="text" name="radius"><br>
        <input type="submit" value="calculate">
    </form>
</body>

</html>

<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = pow($x, $y);
// $total = sqrt($x);
// $total = max($x,$y,$z);
// $total = min($x,$y,$z);
// $total = pi();
// $total = rand(1,60);
// echo $total;

$radius = $_POST["radius"];
$circunference = null;

$circunference = 2 * pi() * $radius;
// Arredondando o numero com 2 casas decimais
$circunference = round($circunference, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = null;

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume  = round($volume, 2);


echo "Circunference = {$circunference} cm <br>";
echo "Area = {$area} cm²<br>";
echo "Volume = {$volume} cm³<br>";


?>