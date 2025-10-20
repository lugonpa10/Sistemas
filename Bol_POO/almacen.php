<?php
require_once 'bebida.php';
require_once 'aguamineral.php';
require_once 'bebidaazucarada.php';

class Almacen {
    private $estanterias; 
    private $filas;
    private $columnas;

    public function __construct($filas, $columnas) {
        $this->filas = $filas;
        $this->columnas = $columnas;
        $this->estanterias = [];

        for ($i = 0; $i < $filas; $i++) {
            $this->estanterias[$i] = [];
            for ($j = 0; $j < $columnas; $j++) {
                $this->estanterias[$i][$j] = null;
            }
        }
    }

    public function agregarProducto($bebida) {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $b = $this->estanterias[$i][$j];
                if ($b !== null && $b->getId() == $bebida->getId()) {
                    echo "Ya existe un producto con ID {$bebida->getId()}<br>";
                    return;
                }
            }
        }

        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                if ($this->estanterias[$i][$j] === null) {
                    $this->estanterias[$i][$j] = $bebida;
                    echo "Producto agregado en posición [$i][$j]<br>";
                    return;
                }
            }
        }
        echo "No hay espacio disponible en el almacén.<br>";
    }

    public function eliminarProducto($id) {
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                if ($this->estanterias[$i][$j] !== null && $this->estanterias[$i][$j]->getId() == $id) {
                    $this->estanterias[$i][$j] = null;
                    echo "Producto con ID $id eliminado.<br>";
                    return;
                }
            }
        }
        echo "No se encontró el producto con ID $id.<br>";
    }

    public function calcularPrecioTotal() {
        $total = 0;
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $b = $this->estanterias[$i][$j];
                if ($b !== null) {
                    $total += $b->getPrecio();
                }
            }
        }
        return $total;
    }

    public function calcularPrecioPorMarca($marca) {
        $total = 0;
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $b = $this->estanterias[$i][$j];
                if ($b !== null && $b->getMarca() == $marca) {
                    $total += $b->getPrecio();
                }
            }
        }
        return $total;
    }

    public function calcularPrecioPorEstanteria($columna) {
        if ($columna < 0 || $columna >= $this->columnas) {
            echo "Estantería no válida.<br>";
            return 0;
        }
        $total = 0;
        for ($i = 0; $i < $this->filas; $i++) {
            $b = $this->estanterias[$i][$columna];
            if ($b !== null) {
                $total += $b->getPrecio();
            }
        }
        return $total;
    }

    public function mostrarInformacion() {  
        echo "<h3>Información del Almacén:</h3>";
        for ($i = 0; $i < $this->filas; $i++) {
            for ($j = 0; $j < $this->columnas; $j++) {
                $b = $this->estanterias[$i][$j];
                if ($b !== null) {
                    $b->mostrarInfo();
                }
            }
        }
    }
}
?>

