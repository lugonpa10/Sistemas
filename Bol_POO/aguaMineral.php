<?php
require_once 'bebida.php';

class AguaMineral extends Bebida
{
    private $origen;

    public function __construct($id, $cantLit, $precio, $marca, $origen)
    {
        parent::__construct($id, $cantLit, $precio, $marca);
        $this->origen = $origen;
    }

    public function mostrarInfo()
    {
        parent::mostrarInfo();
        echo "Tipo: Agua Mineral, Origen: {$this->origen}<br><br>";
    }
}
