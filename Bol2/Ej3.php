<?php
function validarContrasena($contrasena) {
  
    $longitud = strlen($contrasena);
    if ($longitud < 8 || $longitud > 12) {
        return "Contraseña inválida: la longitud debe estar entre 8 y 12 caracteres.";
    }

   
    if (is_numeric($contrasena[0])) {
        return "Contraseña inválida: no puede empezar con un número.";
    }

    
    return "Contraseña válida";
}


echo validarContrasena("12345678"); 
// echo "\n";
// echo validarContrasena("abcd1234"); 
// echo "\n";
// echo validarContrasena("a1b2c3");
 
?>
