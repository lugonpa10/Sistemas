<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignaturas 2ºDAM</title>
 
    <?php include 'Libreria.php'?> 
</head>

<body>
    <h1>Asignaturas 2º dam</h1>
    <?php

    $asignaturas = ["SGE", "ACC", "afondamento"]; // array
    echo "<ol>";
    for ($i = 0; $i < count($asignaturas); $i++) { 

        echo "<li>";
        echo $asignaturas[$i];
        echo "</li>";
    }

    echo "</ol>";
    ?>

    <?php echo sumar(6,8); ?> 
</body>

</html>