<?php
$edad;
function precios($edad)
{
    if ($edad < 8) {
        return 0;
    } else if ($edad >= 9 && $edad <= 16) {
        return 5;
    } else if ($edad >= 17 && $edad <= 25) {
        return 8;
    } else if ($edad >= 26 && $edad <= 55) {
        return 10;
    } else if ($edad >= 56 && $edad <= 65) {
        return 5;
    } else {
        return 0;
    }

}
echo precios(45);

