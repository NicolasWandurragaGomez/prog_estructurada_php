<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en PHP</title>
</head>
<body>
    <h1>Funciones</h1>
    <p>Una funcion es un bloque de codigo que introducimos en nuestra pagina y que puede ser utilizado a lo largo de toda nuestro codigo php. La principal ventaja de las funciones es que nos permite ahorrar codigo.</p>
    <p>Para definir funciones se emplea la sentencia function Ejemplo: function suma($)</p>
    <p>Las funciones pueden recibir tantos argumentos como sean necesarios, separandolos con comas.</p>

    <?php
     function sumar ($x, $y)
     {
        $z = $x + $y;
        return $z;
     }

     //Invoco o llamo a la funcion sumar
     $resultado = sumar(x: 5, y: 12);
     echo "Resultado: ". $resultado;


    ?>

</body>
</html>