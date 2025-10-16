<?php




#variables locales y globales

$dato1 = 33; //se pone el dolar delante
$dato2 = 33.3;
$dato3 = true;
$dato4 = "saludo";
$dato5 = array("lucas", 20, "alumno", true); //array unidimensional de indice

echo "El valor del dato 1 es: " . $dato1; // concatenacion ( se pone el punto)
echo "<BR>";
echo "El valor del dato 2 es : $dato2";
echo "<br>";
echo "El valor del dato 4 es: {$dato}";
echo "<br>";
echo var_dump($dato1);


//constantes y constantes de clase

define("CONSTANTE1", "hola mundo");
define("CONSTANTE2", array("juan", "david", "ana"));

echo "El saludo es " . CONSTANTE1;
echo "<br>";
echo "el valor de ña constante 2 es: " . CONSTANTE2[2];
echo "<br>";

// DEFINIMOS UNA CLASE

class Marca
{
    const CONSTANTE3 = 5.3; // CONSTANTE DE CLASE

}

echo Marca::CONSTANTE3; // uso del operador doble dos puntos para imprimir una constante de clase


// CREAMOS UNA FUNCION PARA VER EL AMBITO DE USO DE LAS VARIABLES
function mostrar()
{
    //acceso a variable global
    global $dato1;

    $dato6 = "variable de funcion"; // variable propia de la funcion

    return "El contenido de la variable dato1 es $dato1 y e valor de la variable dato6 es {$dato6}" . $GLOBALS['dato2']; // EN GLOBALS SE ENCUENTRAN TODAS LAS VARIABLES GLOBALES DEL CODIGO (ES UN ARRAY)
}
echo "<br>";

echo mostrar(); 
//arrays

$array2  = array("nombre"=>"David","edad"=>20); // array unidimensional asociativo

foreach ($array2 as $clave => $valor) { // clave = nombre y edad          valor = "david" y "20"
    echo $clave.":".$valor;
    echo"<br>";
    
}


$array3 = [ // array bidimensional asociatitivo
    "usuarios" => ["nombre" => "David" ,"edad" => 45],
    "usuario2" => ["nombre" => "Alonso", "edad" => 33],
     "usuario3" => ["nombre" => "Verstappen", "edad" => 25]

];

foreach($array3 as $elemento => $datos){
    echo $elemento.":";
    echo "<br>";
    foreach($datos as $clave => $valor){
        echo $clave.":".$valor;
        echo "<br>";
    }

    echo "<hr>";

}
/*Librerías de funciones y enlazarlas con el programa principal */
?>