
<?php
function esMultiplo($a, $b) {
    if ($a % $b == 0) {
        echo "$a es múltiplo de $b";
    } else {
        echo "$a no es múltiplo de $b";
    }
}

esMultiplo(3, 5);
?>
