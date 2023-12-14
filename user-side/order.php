<?php
// order.php

// Include necessary PHP files here (e.g., the Commande class and the CommandeController)
include_once('../../models/Commande.php');
include_once('../../controllers/CommandeController.php');

// Get the product ID from the URL
$productId = isset($_GET['id']) ? $_GET['id'] : null;

// Initialize the confirmation message
$confirmationMessage = '';

// Form processing when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a Commande object with form data
    $commande = new Commande();

    // Fill the properties of the Commande object with form data
    $commande->setNom($_POST['nom']);
    $commande->setNomFamille($_POST['nom_famille']);
    $commande->setEmail($_POST['email']);
    $commande->setAdresse($_POST['adresse']);
    $commande->setQteCom($_POST['qte_com']);
    
    // Fill other properties automatically
    $commande->setCreatedAt(date('Y-m-d H:i:s')); // Use the current date
    $commande->setPrixCom(0); // Set to the appropriate value or calculate it
    $commande->setTotalCom(0); // Set to the appropriate value or calculate it
    $commande->setProductId($productId); // Use the product ID

    // Create the CommandeController and insert the order into the database
    $commandeController = new CommandeController();
    $commandeController->insert($commande);

    // Initialize the confirmation message
    $confirmationMessage = 'Merci pour votre commande!';
}

// Display the order form with the confirmation message
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add other links to CSS and JS files here if needed -->
    <style>
        /* Add your custom CSS here if needed */
    </style>
</head>
<body>

    <!-- Display the confirmation message if available -->
    <div class="container mt-3">
        <?php if (!empty($confirmationMessage)) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $confirmationMessage; ?>
            </div>
        <?php endif; ?>

        <!-- Order form -->
        <h2>Formulaire de Commande</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?id=' . $productId); ?>" method="post">
            <input type="hidden" name="product_id" value="<?php echo $productId; ?>">
            
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Donner Votre Nom" required>
        </div>

        <div class="form-group">
            <label for="nom_famille">Nom de famille:</label>
            <input type="text" class="form-control" id="nom_famille" name="nom_famille" placeholder="Votre Nom du Famille" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Donner Votre Adresse Email" required>
        </div>

        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrez Votre Adresse " required>
        </div>
        <div class="form-group">
            <label for="qte_com">Quantite:</label>
            <input type="Number" class="form-control" id="qte_com" name="qte_com" placeholder="Donner la quantite" required>
        </div>
            <button type="submit" class="btn btn-success">Valider la Commande</button>
        </form>
    </div>

    <!-- Add other links to JavaScript files here if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
