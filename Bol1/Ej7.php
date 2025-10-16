<?php
function precioMascota($mascota) {
    switch (strtolower($mascota)) {
        case "huron":
        case "gato":
            echo "La mascota $mascota paga 1€";
            break;
        case "perro":
            echo "La mascota $mascota paga 1,5€";
            break;
        case "loro":
            echo "La mascota $mascota paga 2€";
            break;
        default:
            echo "Mascota no permitida";
    }
}


precioMascota("huron");  
?>
