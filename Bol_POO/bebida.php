<?php
// En el siguiente ejercicio nos piden hacer un almacén, en el que guardaremos un
// conjunto de bebidas.
// Estos productos son bebidas como agua mineral y bebidas azucaradas (coca-cola,
// fanta, etc). De los productos nos interesa saber su identificador (cada uno tiene uno
// distinto), cantidad de litros, precio y marca.

// Si es agua mineral nos interesa saber también el origen (manantial tal sitio o donde
// sea).

// Si es una bebida azucarada queremos saber el porcentaje que tiene de azúcar y si tiene
// o no alguna promoción (si la tiene tendrá un descuento del 10% en el precio).

// En el almacén iremos almacenado estas bebidas por estanterías (que son las columnas
// de la matriz).
// Las operaciones del almacén son las siguientes:
//  Calcular precio de todas las bebidas: calcula el precio total de todos los
// productos del almacén.

//  Calcular el precio total de una marca de bebida: dada una marca, calcular el
// precio total de esas bebidas.

//  Calcular el precio total de una estantería: dada una estantería (columna)
// calcular el precio total de esas bebidas.

//  Agregar producto: agrega un producto en la primera posición libre, si el
// identificador esta repetido en alguno de las bebidas, no se agregará esa bebida.

//  Eliminar un producto: dado un ID, eliminar el producto del almacén.

//  Mostrar información: mostramos para cada bebida toda su información.

// Crea un archivo pruebas.php para probar las funcionalidades (añade productos,
// calcula precios, muestra información, etc)

class bebida{
    protected $id;
    protected $cantLit;
    protected $precio;
    protected $marca;
    
    public function __construct($id,$cantLit,$precio,$marca)
    {
        $this->id = $id;
        $this->cantLit = $cantLit;
        $this->precio = $precio;
        $this->marca = $marca;
        
    }
    public function setId($id){    
        $this-> id =$id;
    }
    
    public function getId(){
        return $this-> id;
    }

    public function setCantLit($cantLit){
        return $this->cantLit = $cantLit;
    }
    public function getCantLit(){
        return $this->cantLit;
    }

    public function setPrecio($precio){
        return $this->precio= $precio;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function setMarca($marca){
        return $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }
    
    public function mostrarInfo(){
        echo " echo ID: {$this->id},Litros: {$this->cantLit} Precio: {$this->precio} Marca: {$this->marca}";
    }


    
}