<?php
require_once "../modelos/modelo.php";

$modelo = new Piloto();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$num_campeonato = $_POST['num_campeonato'];
$equipo = $_POST['equipo'];
$imagen = $_POST['imagen_actual'];

if (!empty($_FILES['nueva_imagen']['name'])) {
    move_uploaded_file($_FILES['nueva_imagen']['tmp_name'], "../img/" . $_FILES['nueva_imagen']['name']);
    $imagen = $_FILES['nueva_imagen']['name'];
}

$modelo->actualizarPiloto($id, $nombre, $apellidos, $num_campeonato, $equipo, $imagen);

header("Location: controlador.php");
exit();
?>