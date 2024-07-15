<?php
class Article {
    private $conn;
    private $table_name = "articulos";

    public $id;
    public $titulo;
    public $sub_content;
    public $contenido;
    public $autor;
    public $fecha;
    public $video_url;
    public $image_url;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function readAll() {
        try {
            $query = "SELECT * FROM " . $this->table_name . " ORDER BY fecha DESC";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt;
        } catch(PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
            return null; // Retorna null o realiza alguna otra acción según tu lógica
        }
    }
}

?>
