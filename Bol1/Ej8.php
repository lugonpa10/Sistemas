<?php
function premioBingo($edad) {
    if ($edad >= 75 && $edad <= 80) {
        $premio = 0.05 * $edad;
        return $premio;
    } else {
        return "No puede participar";
    }
}


echo premioBingo(79);

?>
