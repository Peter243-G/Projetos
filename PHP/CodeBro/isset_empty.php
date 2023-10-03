<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        form {
            height: 300px;
            background-color: #121212;
            width: 300px;
            padding: 20px;
            color: #adadad;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            gap: 5px;

        }
    </style>
</head>

<body>

    <form action="isset_empty.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="Username" id="username"><br>

        <label for="pass">Password</label>
        <input type="password" name="Password" id="pass"><br>

        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>

<?php
// isset() = Returns TRUE if a variable is declared and not null
// empty() = Return TRUE if a variable is not declared, false , null

// $username = "Peterson";
// $username = null;
/*
    if(isset($username)) {
        echo "This variable is set";
    }
    else {
        echo "this variable is NOT set";
    }*/

// if (empty($username)) {
//     echo "This variable is empty";
// } else {
//     echo "this variable is NOT empty";
// }


foreach($_POST as $key => $value) {
    echo "{$key} = {$value} <br>";
}
/*
if (isset($_POST["login"])) {
    // echo "You tried to login <br>";
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    if (empty($username)) {
        echo "Username is missing";
    } elseif (empty($password)) {
        echo "Password is missing";
    } else {
        echo "Hello, {$username}";
    }
}*/

?>