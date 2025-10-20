<?php
require_once 'bebida.php';

class BebidaAzucarada extends Bebida {
    private $porcentajeAzucar;
    private $tienePromocion;

    public function __construct($id, $cantLitros, $precio, $marca, $porcentajeAzucar, $tienePromocion) {
        parent::__construct($id, $cantLitros, $precio, $marca);
        $this->porcentajeAzucar = $porcentajeAzucar;
        $this->tienePromocion = $tienePromocion;
    }

    public function getPrecio() {
        // Si tiene promoción, 10% de descuento
        if ($this->tienePromocion) {
            return $this->precio * 0.9;
        }
        return $this->precio;
    }

    public function mostrarInfo()
    {
        parent::mostrarInfo();
        $promo = $this->tienePromocion ? "Sí (10% desc)" : "No";
        echo "Tipo: Bebida Azucarada, Azúcar: {$this->porcentajeAzucar}%, Promoción: {$promo}<br><br>";
        
    }
}
?>
