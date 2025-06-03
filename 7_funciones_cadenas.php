<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulacion de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>           
    
    <h2>Funcion substr()</h2>
    <?php
     $cadena = "Hola mundo";
     $parte = substr($cadena, 5, 5); // desde el índice 5, extrae 5 caracteres
     echo $parte; // Salida: mundo
    ?>


    <h2>Funcion ord()</h2>
    <?php
     $letra = "A";
     $ascii = ord($letra);
     echo $ascii; // Salida: 65
    ?>


    <h2>Funcion printf()</h2>
    <?php
     $nombre = "Carlos";
     $edad = 25;
     printf("Hola %s, tienes %d años.", $nombre, $edad);
     // Salida: Hola Carlos, tienes 25 años.
    ?>


    <h2>Funcion sprintf()</h2>
    <?php
     $precio = 49.99;
     $texto = sprintf("El precio es: \$%.2f", $precio);
     echo $texto; // Salida: El precio es: $49.99
    ?>


    <h2>Funcion strtolower()</h2>
    <?php
     $cadena = "HOLA MUNDO";
     echo strtolower($cadena); // Salida: hola mundo
    ?>


    <h2>Funcion strtoupper()</h2>
    <?php
     $cadena = "hola mundo";
     echo strtoupper($cadena); // Salida: HOLA MUNDO
    ?>


    <h2>Funcion ereg()</h2>
    <?php
    // Solo funciona en PHP 5.x, no en versiones modernas
     /*
     if (ereg("mundo", "Hola mundo")) 
     {
     echo "¡Coincide!";
     } 
     else 
     {
     echo "No coincide.";
     }*/
    ?>

    
    <?php
     //Reemplazo moderno con preg_match():
     if (preg_match("/mundo/", "Hola mundo")) 
     {
      echo "¡Coincide!";
     }
    ?>



    <h2>Funcion eregi()</h2>
    <?php
     // Solo funciona en PHP 5.x, no en versiones modernas
     /*
     if (eregi("MUNDO", "Hola mundo")) 
     {
      echo "¡Coincide!";
     }*/
    ?>


    <?php
    //Reemplazo moderno con preg_match() insensible a mayúsculas:
     if (preg_match("/mundo/i", "Hola MUNDO")) {
     echo "¡Coincide!";
    }
    ?>




</body>
</html>