<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

require_once 'src/db.php';
require_once 'src/models/Article.php';
require_once 'src/controllers/ArticleController.php';

$smarty = new Smarty();
$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');

// Crear una instancia de la clase Database
$database = new Database();
$conn = $database->getConnection();

// Crear una instancia del controlador ArticleController pasando la conexión a la base de datos
$articleController = new ArticleController($conn);

// Obtener los artículos utilizando el método getArticles() del controlador
$articles = $articleController->getArticles();

// Asignar los artículos a Smarty
$smarty->assign('articles', $articles);

// Mostrar el template
$smarty->display('index.tpl');
?>
