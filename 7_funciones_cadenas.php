<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulación de cadenas</title>
</head>
<body>
    <h1>Funciones manipulación de cadenas</h1>

    <h2>Función substr()</h2>
    <p>Extrae una parte de una cadena.</p>
    <?php
    $texto = "Hola mundo";
    echo substr($texto, 0, 4); // Resultado: Hola
    ?>
    

    <h2>Función ord()</h2>
    <p>Devuelve el valor ASCII del primer carácter de una cadena, ASCII asigna un número a cada carácter</p>
    <?php
    echo ord("A"); // Resultado: 65
    ?>


    <h2>Función printf()</h2>
    <p>Imprime una cadena formateada</p>
    <?php
    $nombre = "Ana";
    $edad = 25;
    printf("Nombre: %s, Edad: %d", $nombre, $edad);
    // Resultado: Nombre: Ana, Edad: 25
    ?>


    <h2>Función sprintf()</h2>
    <p>Igual que printf(), pero devuelve el resultado como cadena en lugar de imprimirlo</p>
    <?php
    $precio = 19.99;
    $texto = sprintf("El precio es $%.2f", $precio);
    echo $texto; // Resultado: El precio es $19.99
    ?>


    <h2>Función strtolower()</h2>
    <p>Convierte una cadena a minúsculas</p>
    <?php
    $texto = "HOLA";
    echo strtolower($texto); // Resultado: hola
    ?>


    <h2>Función strtoupper()</h2>
    <p>Convierte una cadena a mayúsculas</p>
    <?php
    $texto = "hola";
    echo strtoupper($texto); // Resultado: HOLA
    ?>


    <h2>Función ereg()</h2>
    <p>Busca una palabra específica dentro de un texto</p>
    <?php
    if (preg_match("/Hola/", "Hola mundo"))
    {
        echo "Encontrado"; // Resultado: Encontrado
    }
    ?>


    <h2>Función eregi()</h2>
    <P>Busca la palabra "hola" dentro del texto "HOLA mundo"</P>
    <?php
    if (preg_match("/hola/i", "HOLA mundo")) 
    {
        echo "Encontrado"; // Resultado: Encontrado
    }
    ?>
     

</body>
</html>