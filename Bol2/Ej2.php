<?php
function contarLetra($frase, $letra) {
    $contador = 0;
    for ($i = 0; $i < strlen($frase); $i++) {
        if ($frase[$i] === $letra) {
            $contador++;
        }
    }
    return $contador;
}


$frase = "la casa es amarilla";
$letra = "a";
echo "La letra '$letra' aparece " . contarLetra($frase, $letra) . " veces en la frase.";
?>
