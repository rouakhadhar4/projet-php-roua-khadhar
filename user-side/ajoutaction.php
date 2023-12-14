<?php
require_once('../controllers/articleController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idArticle = $_POST['i'];
    $nom = $_POST['no'];
    $description = $_POST['de'];
    $image = $_POST['image'];
    $prix = $_POST['p'];
    $qtestock = $_POST['q'];

    $controller = new articleController();
    $article = new article($idArticle, $nom, $description, $image, $prix, $qtestock);
    
    if ($controller->insert($article)) {
       
        echo "<script>alert('Article ajouté avec succès!');</script>";
    } else {
       
        echo "<script>alert('Une erreur s'est produite lors de l'ajout de l'article.');</script>";
    }
}
?>

