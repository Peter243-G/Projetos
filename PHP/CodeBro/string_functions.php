<?php

$user = "Peterson Gabriel dos Santos";
$user_02 = array("Peterson", "Gabriel", "dos", "Santos");
$phone = "123-456-789";

$username = strtolower($user);
echo $username . "<br>";

$username = strtoupper($user);
echo $username . "<br>";

$username = trim($user);
echo $username . "<br>";

$username = str_pad($user, 10, "2");
echo $username . "<br>";

$phone = str_replace("-", " ", $phone);
echo $phone . "<br>";

$username = strrev($user);
echo $username . "<br>";

$username = str_shuffle($user);
echo $username . "<br>";

$equals = strcmp($user, "Peterson Gabriel");
echo $equals . "<br>";

$count = strlen($user);
echo $count . "<br>";

$position = strpos($user, "P");
echo $position . "<br>";


$first_name = substr($user, 0, 8);
echo $first_name . "<br>";


$last_name = substr($user, 9, 7);
echo $last_name . "<br>";

$full_name = explode(" ", $user);
// echo $full_name . "<br>";

foreach ($full_name as $name) {
    echo $name . "<br>";
}


$username = implode("-", $user_02);
echo $user . "<br>";
