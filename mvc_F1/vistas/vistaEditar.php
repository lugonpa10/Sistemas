<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar piloto F1</title>
</head>
<body>
<h1>Editar Piloto de F1</h1>

<?php if (!isset($piloto) || !is_array($piloto) || empty($piloto)): ?>
    <div class="error">
        <h2>Error: Piloto no encontrado</h2>
        <p>El piloto que intentas editar no existe o hubo un error.</p>
        <a href="controlador.php">← Volver al listado</a>
    </div>
<?php else: ?>

<form action="../controladores/controladorActualizar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= htmlspecialchars($piloto['Id'] ?? '') ?>">
    <input type="hidden" name="imagen_actual" value="<?= htmlspecialchars($piloto['Imagen'] ?? '') ?>">
    
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="nombre" value="<?= htmlspecialchars($piloto['Nombre'] ?? '') ?>" required></td>
        </tr>
        <tr>
            <td>Apellidos:</td>
            <td><input type="text" name="apellidos" value="<?= htmlspecialchars($piloto['Apellidos'] ?? '') ?>" required></td>
        </tr>
        <tr>
            <td>Campeonatos:</td>
            <td><input type="number" name="num_campeonato" value="<?= htmlspecialchars($piloto['Num_campeonato'] ?? '') ?>" required min="0"></td>
        </tr>
        <tr>
            <td>Equipo:</td>
            <td><input type="text" name="equipo" value="<?= htmlspecialchars($piloto['Equipo'] ?? '') ?>" required></td>
        </tr>
        <tr>
            <td>Imagen actual:</td>
            <td>
                <?php if (!empty($piloto['Imagen'])): ?>
                    <img src="../img/<?= htmlspecialchars($piloto['Imagen']) ?>" width="100"><br>
                  
                <?php else: ?>
                    Sin imagen
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Nueva imagen:</td>
            <td><input type="file" name="nueva_imagen" accept="image/*"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Actualizar piloto</button>
            </td>
        </tr>
    </table>
</form>

<a href="controlador.php">← Volver al listado</a>

<?php endif; ?>

</body>
</html>