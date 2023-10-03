<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>

<body>


    <form action="checkboxes.php" method="post">

        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza <br>
        <input type="checkbox" name="foods[]" value="Hamburguer">
        Hamburguer<br>
        <input type="checkbox" name="foods[]" value="HotDog">
        Hotdog <br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco <br>

        <input type="submit" name="submit">

    </form>




</body>

</html>



<?php

if (isset($_POST["submit"])) {

    // if (isset($_POST["pizza"])) {
    //     echo "Você gosta de Pizza </br>";
    // }
    // if (isset($_POST["hamburguer"])) {
    //     echo "Você gosta de Hamburguer </br>";
    // }
    // if (isset($_POST["hotdog"])) {
    //     echo "Você gosta de HotDog </br>";
    // }
    // if (isset($_POST["taco"])) {
    //     echo "Você gosta de Taco </br>";
    // }

    // if (empty($_POST["pizza"])) {
    //     echo "Você NÃO gosta de Pizza </br>";
    // }
    // if (empty($_POST["hamburguer"])) {
    //     echo "Você NÃO gosta de Hamburguer </br>";
    // }
    // if (empty($_POST["hotdog"])) {
    //     echo "Você NÃO gosta de HotDog </br>";
    // }
    // if (empty($_POST["taco"])) {
    //     echo "Você NÃO gosta de Taco </br>";
    // }


    $foods = $_POST["foods"];


    foreach($foods as $food) {
        echo $food."</br>";
    }
}

?>