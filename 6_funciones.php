<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones en php</title>
</head>
<body>
    <h1>Funciones</h1>
    <p>Una función es un bloque de código que introduciomos en nuestra página y que puede ser utilizado a lo largo de todo nuestro código php.  La principal ventaja de las funciones es que nos permite ahorrar código.</p>
    <p>Para definir funciones emplea la sentencia function. Ejemplo: function suma($)</p>
    <p>Las funciones pueden recibir tantos argumentos como sean necesarios, separandolos con comas.</p>

    <?php
        function sumar($x, $y)
        {
            $z = $x + $y;
            return $z;
        }

        // Invoco o llamo la función sumar

        $resultado = sumar(x:5,y:12);
        echo "Resultado: ". $resultado;
    ?>
</body>
</html>