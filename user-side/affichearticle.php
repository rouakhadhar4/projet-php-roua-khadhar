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

        .item-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .item {
            width: 30%; /* Adjust the width based on your preference */
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            overflow: hidden;
        }

        .item img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .item-content {
            padding: 10px;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            white-space: nowrap;
        }

        .footer p {
            margin: 10px 0;
            display: inline-block;
        }

        .contact-icons {
            text-align: center;
        }

        .contact-icons p {
            margin-bottom: 10px;
        }

        .contact-icons i {
            margin-right: 10px;
            font-size: 20px;
        }
     
        .modify-button {
            background-color:  #A0C49D;; /* Green background color */
            color: white; /* White text color */
            padding: 10px 15px; /* Padding for better appearance */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border: none; /* Remove button border */
            border-radius: 5px; /* Optional: Rounded corners */
            cursor: pointer;
        }
  
    .red-bg {
        background-color: red;
    }

    .delete-button {
        background-color: #dc3545; /* Red background color */
        color: #fff; /* White text color */
        border: none;
        padding: 0.375rem 0.75rem; /* Adjust padding as needed */
        border-radius: 0.25rem; /* Adjust border-radius as needed */
        cursor: pointer;
    }

    .delete-button:hover {
        background-color: #c82333; /* Darker red on hover */
    }
  
    .custom-modify-button {
        background-color: #007bff; /* Blue color */
        color: #fff; /* White text */
        border: none;
        padding: 5px 10px; /* Adjust padding as needed */
        cursor: pointer;
    }

    .custom-modify-button:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }



</style>

</head>
<body>

<div class="navbar">
<a href="acceuil.php">Accueil</a>
    <a href="ajouter.php">Ajouter</a>
   
    <a href="affichearticle.php">Afficher </a>
    <a href="listecommande.php">liste commande </a>
    
    
    <a href="recherche.html">rechercher</a>

   
    <a href="deconnexion.php">Deconnexion</a>

</div>

    <div class="item-container">
    <!-- Bootstrap CSS -->


    



   

    <?php
require_once('../controllers/articleController.php');

$controller = new articleController();
$res = $controller->liste_id('ORDER BY idArticle');





if ($res) {
    echo "<table border='4' style='width: 90%; border-collapse: collapse; margin: 20px;'>";
    echo "<tr>";
    echo "<th>ID Article</th>";
    echo "<th>Nom de l'article</th>";
    echo "<th>Image</th>";
    echo "<th>Description</th>";
    echo "<th>Prix</th>";
    echo "<th>Quantité en Stock</th>";
    echo "<th>Editer</th>"; 
    echo "<th>Supprimer</th>";
    echo "</tr>";

    while ($l = $res->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($l['idArticle']) . "</td>";
        echo "<td>" . htmlspecialchars($l['nom']) . "</td>";
        echo "<td><img class='responsive-image' style='max-width: 200px; max-height: 400px;' src='images/" . htmlspecialchars($l['image']) . "' alt='Image'></td>";

        echo "<td>" . htmlspecialchars($l['description']) . "</td>";
        echo "<td>" . htmlspecialchars($l['prix']) . "</td>";
        echo "<td>" . htmlspecialchars($l['qtestock']) . "</td>";

    
        echo "<td><button onclick=\"window.location='modifee.php?idArticle=" . htmlspecialchars($l['idArticle']) . "'\" class='btn custom-modify-button'>Modifier</button></td>";

       
        echo "<td>";
        echo "<form method='post' action='suppnouveau.php'>";
        echo "<input type='hidden' name='idArticle' value='" . htmlspecialchars($l['idArticle']) . "'>";
        echo "<button type='submit' class='btn btn-danger delete-button'><i class='bi bi-trash'></i> Supprimer</button>";
        echo "</form>";
        echo "</td>";

        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Problème lors de l'exécution de la requête.";
}
