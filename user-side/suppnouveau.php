<?php
require_once('../controllers/ArticleController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idArticle'])) {
    $idArticle = $_POST['idArticle'];

    // Créez une instance du contrôleur d'article
    $articleController = new ArticleController();

    // Appelez la méthode delete pour supprimer l'article
    $result = $articleController->delete($idArticle);

    // Utilisez JavaScript pour afficher une alerte
    echo "<script>";
    if ($result) {
        echo "alert('Article supprimé avec succès.');";
    } else {
        echo "alert('Erreur lors de la suppression de l\'article.');";
    }
    echo "</script>";
}
?>
