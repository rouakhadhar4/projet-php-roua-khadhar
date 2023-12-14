<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px;
            text-align: right;
            color: white;
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 14px 16px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 30%;
            background-color: #fff;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-details {
            padding: 15px;
        }
     
    .ecommerce-commander-button {
        background-color:#ff8080 ; /* Blue color */
        color: #fff; /* White text */
        border: none;
        padding: 10px 20px; /* Adjust padding as needed */
        cursor: pointer;
        font-size: 16px; /* Adjust font size as needed */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s ease; /* Smooth transition on hover */
    }

    .ecommerce-commander-button:hover {
        background-color: #ff8080; /* Darker blue on hover */
    }
</style>



</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Home</a>
    <a class="navbar-brand" href="shop.php">Shop</a>
    <a class="navbar-brand" href="aboutus.html">aboutus</a>
  

    <a class="navbar-brand" href="deconnexionuser.php">Deconnexion</a>
    <form action="recheruserp.php" method="get" class="form-inline">
        <input type="hidden" name="category" value="nom">

        <div class="input-group">
            <input type="text" id="value" name="value" class="form-control" placeholder="Search" required>
<div class="input-group-append">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
            </div>
    
</form>
</nav>


<?php
require_once('../controllers/articleController.php');
$controller = new articleController();
$res = $controller->liste_id('ORDER BY idArticle');

if ($res) {
    echo "<div class='product-container'>";

    while ($l = $res->fetch(PDO::FETCH_ASSOC)) {
        echo "<div class='product-card'>";
        echo "<img class='responsive-image' src='images/" . htmlspecialchars($l['image']) . "' alt='Product Image'>";
        echo "<div class='product-details'>";

        echo "<p>Nom: " . htmlspecialchars($l['nom']) . "</p>";
        echo "<p>Description: " . htmlspecialchars($l['description']) . "</p>";
        echo "<p>Prix: " . htmlspecialchars($l['prix']) . "</p>";

        // Order button form
        echo "<form action='order_form.php' method='post'>";
     echo "<input type='hidden' name='article_id' value='" . htmlspecialchars($l['idArticle']) . "'>";
     echo "<button type='submit' name='order_button' formaction='connexion.php' class='btn ecommerce-commander-button'>Commander</button>";


    echo "</form>";
        echo "</form>";

        echo "</div>";
        echo "</div>";
    }

    echo "</div>";
} else {
    echo "Problème lors de l'exécution de la requête.";
}
?>

</body>
</html>


