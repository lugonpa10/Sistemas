<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

// primera fila (encabezados)
echo "<tr><td></td>";
for ($i = 1; $i <= 10; $i++) {
    echo "<td><b>$i</b></td>";
}
echo "</tr>";


for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    echo "<td><b>$i</b></td>"; // encabezado de fila
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
