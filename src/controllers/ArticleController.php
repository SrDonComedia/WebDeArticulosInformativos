<?php
require_once 'src/models/Article.php';

class ArticleController {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getArticles() {
        $article = new Article($this->db);
        $stmt = $article->readAll();

        // Verificar si $stmt es null (indicativo de un error)
        if ($stmt === null) {
            // retorna un arreglo vacío si hay error
            return [];
        }

        // Si no hay errores, obtiene los artículos y retorna como arreglo
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }
}

?>
