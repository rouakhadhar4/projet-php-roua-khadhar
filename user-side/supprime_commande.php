<?php
require_once('../controllers/CommandeController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idCommande'])) {
    $idCommande = $_POST['idCommande'];

    $commandeController = new CommandeController();
    $commandeController->deleteCommande($idCommande);
}
?>
