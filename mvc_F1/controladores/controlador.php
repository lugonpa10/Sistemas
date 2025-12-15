<?php

require_once "../modelos/modelo.php";

$modelo = new Piloto();
$pilotos = $modelo->getPilotos();

require_once "../vistas/vista.php";
?>