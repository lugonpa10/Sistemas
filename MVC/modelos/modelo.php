<?php

class Empleado
{
    private $empleado;
    private $db;

    public function __construct()
    {
        $this->empleado = array();
        $this->db = new PDO('mysql:host = localhost; dbname=ejemplo_mvc; charset = utf8 ','root',''); // La clase PDO permite la conexion a la base de datos, en el primer parametro se pone el motor de las consultas,el servidor, el nombre de la base y los caracteres, em el segundo usuario y en el tercero la contraseña

    }
    public function setEmpleado($nombre,$apellidos,$telefono,$departamento){

        $sql = "INSERT INTO empleados(nombre,apellidos,telefono,departamento) VALUES ('$nombre','$apellidos','$telefono','$departamento')";
        $result = $this->db->query($sql);
        $this->db=null;
        return $result;
    }
}
