<?php

    //Associative arrays = An array made of key => value pairs

    // countries => capitals
    // id => username
    // item => price


    $capitals = array(
                    "USA" => "Washinton D.C." ,
                    "Japan"=> "Kyoto" ,
                    "South Korea" => "Seoul",
                    "Brazil"=> "Brasilia");

                    // echo $capitals["USA"] = "Las Vegas";
                    // $capitals["China"] = "Beijing";
                    // array_pop($capitals);
                    // array_shift($capitals);
                    // $key = array_keys($capitals);
                    // $values = array_values($capitals);
                    // $capitals = array_flip($capitals);
                    


                    //mostrando apenas os paises
                    // foreach($key as $keys) {
                        // echo "{$keys} <br>";
                    // }

                    echo "<br> <br>";
                    
                    // Mostrando o pais com a capital
        foreach($capitals as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
