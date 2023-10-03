<?php
// session = SGB used to store information on a user
// to be used across multiple pages.
// A user assigned a session-id
// ex. login credentials

/**
 * session = SGB usado para armazenar informações sobre um usuário para ser usado em várias páginas.
 * Um usuário atribuiu um ID de sessão Ex. credenciais de login
 */

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="session.php" method="post">
        username<br>
        <input type="text" name="username"> <br>

        password<br>
        <input type="password" name="password"> <br>

        <input type="submit" value="Login" name="login">

    </form>
</body>

</html>

<?php
if (isset($_POST["login"])) {

    if (
        !empty($_POST["username"]) &&
        !empty($_POST["password"])
    ) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");
    } else {
        echo "Missing username/password <br>";
    }
}
?>