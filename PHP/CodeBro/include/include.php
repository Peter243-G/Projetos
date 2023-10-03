<?php
// include() = Copies the content of a file(php/html/text)
// and includes it in your php file.
// Sections of our website become reusable
// Changes only need to be made in one place

/**
 * include() = Copia o conteúdo de um arquivo(php/html/text) e inclui-lo em seu arquivo php.
 * Seções do nosso site tornam-se reutilizáveis As alterações só precisam ser feitas em um só lugar
 */

include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        This is the Home page <br>
        Stuff about your home page can go here <br>
</body>

</html>

<?php

include("footer.html");
