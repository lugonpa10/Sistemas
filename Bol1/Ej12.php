<?php
$numero = 5;   
$factorial = 1;
$i = 1;

do {
    $factorial *= $i;
    $i++;
} while ($i <= $numero);

echo "El factorial de $numero es: $factorial";
?>
