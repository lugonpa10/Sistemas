<?php
$nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
$materias = array("Lengua", "Historia", "Inglés", "Matemáticas");

echo "<table border='1' cellpadding='5' cellspacing='0'>";

// Encabezado
echo "<tr><th></th>";
foreach ($materias as $materia) {
    echo "<th>$materia</th>";
}
echo "</tr>";

// Filas con alumnos y notas
foreach ($nombres as $nombre) {
    echo "<tr>";
    echo "<td><b>$nombre</b></td>"; 
    foreach ($materias as $materia) {
        $nota = rand(1, 10); 
        echo "<td>$nota</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
