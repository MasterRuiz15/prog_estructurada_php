<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes en PHP</title>
</head>
<body>
    <h1>Variables y constantes en PHP</h1>
    <?php
        // Las variables se representan anteponiendo el simbolo $ a la palabra que se use como variable
        // PHP es sensitive case 
        // Las variables no pueden empezar con un número 
        // En php no es necesario especificar el tipo de variable, pero si se debe saber cuando usar  las comillas, para el caso de variables de tipo cadena o spring.«


        // Asignamos a la variables a el valor 5
        $a = 5;

        // Asignampos a la variable b el valor 7 como cadena

        $b = "7";

        echo "<h1>Variables</h1>";

        // Mostrar el valor de la variable a 
        echo ($a);

        echo "<br>";

        // Mostrar el valor de la variable b
        echo ($b);  

        echo "<br>";

        echo "<h2>Constantes</h2>";

        /*El valor de una constante no cambia o se mantiene fijo durante la ejecuación de una pagina*/

        /*La forma de definir las constantes en php es medinate el uso de la instruccion define*/

        // Creamos una constante llamada capital_colombia, cuyo valor es Bogotá 

        define("capital_colombia", "Bogotá");

        
    ?>
</body>
</html>