<?php
// admin_orders.php

include_once('../models/Commande.php');
include_once('../controllers/CommandeController.php');

$commandeController = new CommandeController();
$orders = $commandeController->getOrdersWithProductDetails();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration des Commandes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add other links to CSS and JS files here if needed -->
    <style>
        /* Add your custom CSS here if needed */
    </style>
</head>
<body>

    <!-- List of orders -->
    <div class="container mt-5">
        <h2>Administration des Commandes</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Ville</th>
                    <th>Telephone</th>
                    <th>Carte Postale</th>
                    <th>Date de commande</th>
                    <th>Quantite</th>
                    <th>Nom du Produit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td><?php echo $order['idCommande']; ?></td>
                        <td><?php echo $order['name']; ?></td>
                        <td><?php echo $order['prenom']; ?></td>
                        <td><?php echo $order['ville']; ?></td>
                        <td><?php echo $order['telephone']; ?></td>
                        <td><?php echo $order['cartePostale']; ?></td>
                        <td><?php echo $order['dateCommande']; ?></td>
                        <td><?php echo $order['Qte']; ?></td>
                        <td><?php echo $order['nom']; ?></td>
                        <!-- Add other columns if needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Add other links to JavaScript files here if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
