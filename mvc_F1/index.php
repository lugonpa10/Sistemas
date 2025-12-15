<?php
require_once "modelos/modelo.php";

$mensaje = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $num_campeonato = $_POST['num_campeonato'] ?? '';
    $equipo = $_POST['equipo'] ?? '';
    
 
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
        $nombre_imagen = $_FILES['imagen']['name'];
        $ruta_temporal = $_FILES['imagen']['tmp_name'];
        $ruta_destino = "img/" . $nombre_imagen;
        
 
        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
         
            $piloto = new Piloto();
            if ($piloto->setPiloto($nombre, $apellidos, $num_campeonato, $equipo, $nombre_imagen)) {
                $mensaje = "<p class='success'>¡Piloto añadido correctamente!</p>";
            } else {
                $mensaje = "<p class='error'>Error al guardar en la base de datos</p>";
            }
        } else {
            $mensaje = "<p class='error'>Error al subir la imagen. Asegúrate de que la carpeta 'img' existe y tiene permisos de escritura.</p>";
        }
    } else {
        $mensaje = "<p class='error'>Por favor, selecciona una imagen</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario piloto F1</title>
</head>
<body>
<h1>Formulario de inscripción de piloto F1</h1>

<?php if($mensaje): ?>
    <div class="<?php echo strpos($mensaje, 'correctamente') !== false ? 'success' : 'error'; ?>">
        <?php echo $mensaje; ?>
    </div>
<?php endif; ?>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" placeholder="Nombre del piloto" required></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" placeholder="Apellidos del piloto" required></td>
        </tr>
        <tr>
            <td>Campeonatos:</td>
            <td><input type="number" name="num_campeonato" placeholder="Número de campeonatos" required></td>
        </tr>
        <tr>
            <td>Equipo:</td>
            <td><input type="text" name="equipo" placeholder="Equipo actual" required></td>
        </tr>
        <tr>
            <td>Imagen:</td>
            <td><input type="file" name="imagen" accept="image/*" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Registrar piloto</button>
            </td>
        </tr>
    </table>
</form>

<div class="listar-btn">
    <a href="controladores/controlador.php">Ver listado de pilotos</a>
</div>

</body>
</html>