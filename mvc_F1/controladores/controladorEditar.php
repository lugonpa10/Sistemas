<?php
require_once "../modelos/modelo.php";

$modelo = new Piloto();
$piloto = $modelo->getPilotoById($_GET['id']);

require_once "../vistas/vistaEditar.php";
?>