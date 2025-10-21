<?php
require_once 'almacen.php';


$almacen = new Almacen(2, 3);


$agua1 = new AguaMineral(1, 1.5, 1.00, "Font Vella ", "Manantial del Montseny");
$agua2 = new AguaMineral(2, 0.5, 0.60, "agua buena ", "Galicia");
$coca = new BebidaAzucarada(3, 0.33, 1.20, "CocaCola ", 12, true);
$fanta = new BebidaAzucarada(4, 0.33, 1.10, "Fanta ", 10, false);
$agua3 = new AguaMineral(5, 1.5, 1.00, "Font vieja ", "Manantial del Montseny");
$agua4 = new AguaMineral(6, 0.5, 0.60, "solan de cabras ", "Sierra Nevada");




$almacen->agregarProducto($agua1);
$almacen->agregarProducto($agua2);
$almacen->agregarProducto($coca);
$almacen->agregarProducto($fanta);
$almacen->agregarProducto($agua3);
$almacen->agregarProducto($agua4);



$almacen->mostrarInformacion();




echo "Precio almacén: " . $almacen->calcularPrecioTotal() . " €<br>";
echo " Precio Coca-cola: " . $almacen->calcularPrecioPorMarca("Fanta ") . " €<br>";
echo " Precio estantería 0: " . $almacen->calcularPrecioPorEstanteria(2) . " €<br>";


$almacen->eliminarProducto(1);


$almacen->mostrarInformacion();
?>
