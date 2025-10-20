<?php
require_once 'almacen.php';

// Crear almacén de 2x3
$almacen = new Almacen(2, 3);

// Crear bebidas
$agua1 = new AguaMineral(1, 1.5, 1.00, "Font Vella", "Manantial del Montseny");
$agua2 = new AguaMineral(2, 0.5, 0.60, "Lanjarón", "Sierra Nevada");
$coca = new BebidaAzucarada(3, 0.33, 1.20, "Coca-Cola", 12, true);
$fanta = new BebidaAzucarada(4, 0.33, 1.10, "lo que sea", 10, false);
$agua3 = new AguaMineral(5, 1.5, 1.00, "Font vieja", "Manantial del Montseny");
$agua4 = new AguaMineral(6, 0.5, 0.60, "solan de cabras", "Sierra Nevada");



// Agregar productos
$almacen->agregarProducto($agua1);
$almacen->agregarProducto($agua2);
$almacen->agregarProducto($coca);
$almacen->agregarProducto($fanta);
$almacen->agregarProducto($agua3);
$almacen->agregarProducto($agua4);


// Mostrar info
$almacen->mostrarInformacion();



// Calcular precios
echo "<hr>";
echo "Precio total del almacén: " . $almacen->calcularPrecioTotal() . " €<br>";
echo " Precio total de Coca-Cola: " . $almacen->calcularPrecioPorMarca("Coca-Cola") . " €<br>";
echo " Precio total estantería 0: " . $almacen->calcularPrecioPorEstanteria(0) . " €<br>";

// Eliminar producto
$almacen->eliminarProducto(2);

// Mostrar de nuevo
echo "<hr>";
$almacen->mostrarInformacion();
?>
