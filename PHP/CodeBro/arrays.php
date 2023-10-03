<!-- PHP -->
<?php
$food_1 = "apple";
$food_2 = "banana";
$food_3 = "pera";
$food_4 = "orange";
// echo "Fruits: {$food_1}, {$food_2}, {$food_3}, {$food_4} <br>";

$foods = array("Banana", "Apple", "Pera", "Orange");
$foods[0] = "Pineapple";
// Adicionando dados no array
array_push($foods, "Coconut", "Kiwi");
// Removendo dados do array (ultimo dado)
array_pop($foods);
// Remove o primeiro dado do array
array_shift($foods);
// Invertendo a ordem dos dados do array (ultimo -> primeiro e vice-versa), porem retorna um novo array
$foods = array_reverse($foods);
// foreach($foods as $food) {
//     echo $food.'<br>';
// }

// echo "<br>---------------------<br>";
// echo "Função reversa";
// echo "<br>---------------------<br>";

// Conta a quantidade de elementos dentro do array
echo count($foods)."<br>";

/*  echo $foods[0]."<br>";
    echo $foods[1]."<br>";
    echo $foods[2]."<br>";
    echo $foods[3]."<br>";*/

// forEach do JS é a mesma função do PHP
foreach ($foods as $food) {
    echo $food . "<br>";
}
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays PHP</title>
    <!-- CSS -->
    <style>
        body {
            background-color: #1a1a1a;
            color: #eee;
            padding: 40px;
        }

        .anima {
            width: 50px;
            height: 50px;
            background: #899;
            border-radius: 50%;
            animation: anima 4s 2s forwards infinite;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        @keyframes anima {
            0% {
                top: 0;
                left: 0;
            }
            50% {
                top: 50%;
                left: 50%;
            }
            100% {
                background-color: #adadad;
            }
        }
    </style>
</head>

<body>

    <div class="anima">

    </div>


    <!-- JAVASCRIPT -->
    <script>
        // let corpo = document.querySelector("body").style.background = "#000";
        // let corpoCor = document.querySelector("body").style.color = "#fff";
    </script>
</body>

</html>