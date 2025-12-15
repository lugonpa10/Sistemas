<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de pilotos F1</title>
  
</head>
<body>
<h1>Listado de pilotos de Fórmula 1</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Campeonatos</th>
        <th>Equipo</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </tr>
    <?php if ($pilotos): ?>
        <?php foreach ($pilotos as $p): ?>
            <tr>
                <td><?= $p['Id'] ?></td>
                <td><?= $p['Nombre'] ?></td>
                <td><?= $p['Apellidos'] ?></td>
                <td><?= $p['Num_campeonato'] ?></td>
                <td><?= $p['Equipo'] ?></td>
                <td><img src="../img/<?= $p['Imagen'] ?>" width="50"></td>
                <td>
                    <a href="controladorEditar.php?id=<?= $p['Id'] ?>">Editar</a>
                    <a class="delete" href="controladorBorrar.php?id=<?= $p['Id'] ?>">Borrar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="7">No hay pilotos registrados</td>
        </tr>
    <?php endif; ?>
</table>

<a href="../index.php" class="back-btn">Volver al formulario</a>
</body>
</html>