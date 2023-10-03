<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize & Validate</title>
</head>

<body>



    <form action="" method="post">

        Username: <br>
        <input type="text" name="username"><br>

        Age: <br>
        <input type="text" name="age"><br>

        Email: <br>
        <input type="text" name="email"><br>

        <input type="submit" value="login" name="login">
    </form>
</body>

</html>


<?php
if ($_POST["login"]) {
    /*$username = filter_input(
        INPUT_POST,
        "username",
        FILTER_SANITIZE_SPECIAL_CHARS
    );
    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_SANITIZE_NUMBER_INT
    );

    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_SANITIZE_EMAIL
    );

    echo "Hello {$username}.<br>You have a {$age} years old.<br>You email is {$email}.<br> ";
     */

    $age = filter_input(
        INPUT_POST,
        "age",
        FILTER_VALIDATE_INT
    );

    $email = filter_input(
        INPUT_POST,
        "email",
        FILTER_VALIDATE_EMAIL
    );

    if (empty($age)) {
        echo "That number wasn't valid<br>";
    } else {
        echo "You are $age years old.";
    }

    if (empty($email)) {
        echo "That email wasn't valid";
    } else {
        echo "Your email is: {$email}.";
    }
}
?>