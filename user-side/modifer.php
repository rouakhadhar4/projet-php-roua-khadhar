<?php
ob_start();

require_once('../controllers/articleController.php');
require_once('../models/article.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $idArticle = $_POST['idArticle'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];

       
        $res['image'] = isset($res['image']) ? $res['image'] : ''; 

        $imagePath = 'images/' . htmlspecialchars($res['image']);

   
        if (!empty($_FILES["image"]["name"])) {
            $targetDirectory = "images/";
            $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $imagePath = $targetFile;
            } else {
                throw new Exception("Erreur lors du téléchargement du fichier.");
            }
        }
        

        $prix = $_POST['prix'];
        $qtestock = $_POST['qtestock'];

        echo "ID: $idArticle, Nom: $nom, Description: $description, Image: $imagePath, Prix: $prix, Qté en stock: $qtestock";

        $controller = new articleController();
        $rowCount = $controller->modifierArticle(new article($idArticle, $nom, $description, $imagePath, $prix, $qtestock));

        if ($rowCount > 0) {
            header('Location: affichearticle.php');
            exit();
        } else {
            throw new Exception("Erreur lors de la modification de l'article.");
        }
    } catch (Exception $e) {
        echo "Une erreur est survenue: " . $e->getMessage();
    }
    ob_end_flush();
}
?>
