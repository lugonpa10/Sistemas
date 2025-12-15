<?php
require_once "../modelos/modelo.php";

$modelo = new Piloto();
$modelo->borrarPiloto($_GET['id']);

header("Location: controlador.php");
?>