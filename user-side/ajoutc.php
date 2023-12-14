<?php
require_once('../controllers/CommandeController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $idCommande = $_POST['idCommande'];
    $nomArticle = $_POST['nomArticle'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $telephone = $_POST['telephone'];
    $cartePostale = $_POST['cartepostale'];
    $Qte = $_POST['Qte'];
    $dateCommande = $_POST['dateCommande'];
    $status = $_POST['status'];


    $commande = new Commande($idCommande, $nomArticle, $nom, $prenom, $ville, $telephone, $cartePostale, $dateCommande, $Qte, $status);

    
    $commandeController = new CommandeController();

   
    $commandeController->insertCommande($commande);


    echo '<script>alert("Commande ajoutée avec succès!");</script>';

    
}
?>


