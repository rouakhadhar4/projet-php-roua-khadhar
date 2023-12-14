<?php
// Include necessary files and setup your database connection
require_once('../controllers/articleController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idArticle'])) {
    $articleId = $_POST['idArticle'];

    $controller = new articleController();
    $articleInfo = $controller->getArticleInfo($idArticle);

   
    echo json_encode($articleInfo);
} else {
   
    echo json_encode(array('error' => 'Article ID not provided'));
}
?>
