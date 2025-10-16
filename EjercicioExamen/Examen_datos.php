<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de suscripción</title>
</head>
<body>

<?php

function formato($dato)
{
    return htmlspecialchars(stripslashes(trim($dato)));
}

$error = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (empty($_POST['nombre'])) {
        echo "<p style='color:red;'>El campo nombre es obligatorio.</p>";
        $error = true;
    } else {
        $nombre = formato($_POST['nombre']);
    }

    if (empty($_POST['apellido1'])) {
        echo "<p style='color:red;'>El primer apellido es obligatorio.</p>";
        $error = true;
    } else {
        $apellido1 = formato($_POST['apellido1']);
    }

    if (empty($_POST['apellido2'])) {
        echo "<p style='color:red;'>El segundo apellido es obligatorio.</p>";
        $error = true;
    } else {
        $apellido2 = formato($_POST['apellido2']);
    }

    if (empty($_POST['correo']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Debe introducir un correo válido.</p>";
        $error = true;
    } else {
        $correo = formato($_POST['correo']);
    }

    if (empty($_POST['respuesta'])) {
        echo "<p style='color:red;'>Debe indicar si desea recibir información.</p>";
        $error = true;
    } else {
        $informacion = $_POST['respuesta']; 
    }

    $revistasSeleccionadas = $_POST['revistas'] ?? [];
    if (empty($revistasSeleccionadas)) {
        echo "<p style='color:red;'>Debe seleccionar al menos una publicación.</p>";
        $error = true;
    }

    if (empty($_POST['suscripcion'])) {
        echo "<p style='color:red;'>Debe seleccionar una forma de suscripción.</p>";
        $error = true;
    } else {
        $suscripcion = $_POST['suscripcion'];
    }

  
    if (!$error) {
        echo "<h3>Datos de la suscripción</h3>";
        echo "<p>Nombre: $nombre $apellido1 $apellido2</p>";
        echo "<p>Correo: $correo</p>";

     
        if ($informacion == "si") {
            echo "Le enviaremos información sobre nuestras publicaciones al correo <b>$correo</b>.</p>";
        } else {
            echo "Ha indicado que no desea recibir información adicional.</p>";
        }

        echo "<hr>";

        echo "<p>Publicaciones seleccionadas:</p>";
        foreach ($revistasSeleccionadas as $r) {
            echo "<b>$r</b><br>";
        }

        $num = count($revistasSeleccionadas);
        if ($num == 1) $tarifas = ['semanal'=>25,'mensual'=>70,'anual'=>550];
        elseif ($num == 2) $tarifas = ['semanal'=>35,'mensual'=>90,'anual'=>650];
        else $tarifas = ['semanal'=>50,'mensual'=>120,'anual'=>800];

        $tarifa = $tarifas[$suscripcion] ?? 0;
        echo "<p>Su tarifa $suscripcion es de <b>$tarifa €</b>.</p>";
    }
}
?>

</body>
</html>
