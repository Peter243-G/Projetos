<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        username <br>
        <input type="text" name="username">
        <input type="submit">
    </form>


</body>

</html>
<?php
// $_SERVER = SGB that contains headers, paths, and script locations.
// the entries in this array are created by the web server.
// Shows nearly everyrhing you need to know about the current web page env.

/**
 * $_SERVER = SGB que contém cabeçalhos, caminhos e locais de script.
 * As entradas nessa matriz são criadas pelo servidor Web.
 * Mostra quase tudo o que você precisa saber sobre a página da web atual env.
 */

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value} <br>";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "HELLO";
}

?>