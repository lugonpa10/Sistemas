<?php
class Piloto {
    private $conexion;

    public function __construct() {
        try {
            $this->conexion = new PDO("mysql:host=localhost;dbname=ejemplo_mvc", "root", "");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function setPiloto($nombre, $apellidos, $num_campeonato, $equipo, $imagen) {
        // VERIFICA LOS NOMBRES DE COLUMNAS - deben coincidir con tu tabla
        $sql = "INSERT INTO prueba_mvc (Nombre, Apellidos, Num_campeonato, Equipo, Imagen) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $apellidos, $num_campeonato, $equipo, $imagen]);
    }

    public function getPilotos() {
        $sql = "SELECT * FROM prueba_mvc";
        $result = $this->conexion->query($sql);
        return $result ? $result->fetchAll(PDO::FETCH_ASSOC) : [];
    }

    public function getPilotoById($id) {
        if (!$id) return false;
        
        try {
            $sql = "SELECT * FROM prueba_mvc WHERE Id = ?";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            
       
            if ($result === false) {
                error_log("No se encontró piloto con ID: $id");
            }
            
            return $result;
        } catch (PDOException $e) {
            error_log("Error en getPilotoById: " . $e->getMessage());
            return false;
        }
    }

    public function actualizarPiloto($id, $nombre, $apellidos, $num_campeonato, $equipo, $imagen) {
        $sql = "UPDATE prueba_mvc SET Nombre=?, Apellidos=?, Num_campeonato=?, Equipo=?, Imagen=? WHERE Id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$nombre, $apellidos, $num_campeonato, $equipo, $imagen, $id]);
    }

    public function borrarPiloto($id) {
        $sql = "DELETE FROM prueba_mvc WHERE Id=?";
        $stmt = $this->conexion->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>