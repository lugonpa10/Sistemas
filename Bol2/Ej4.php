<?php

$numerosPares = [];


for ($i = 1; $i <= 10; $i++) {
    $numerosPares[] = $i * 2; 
}


foreach ($numerosPares as $numero) {
    echo $numero . "\n";
}
?>
