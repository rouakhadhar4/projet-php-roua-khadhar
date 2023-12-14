
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Font Awesome -->
    

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px; /* Ajout de padding pour harmoniser avec la page d'ajout */
            text-align: right; /* Align text to the right */
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

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 30px;
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

        .text-right {
            text-align: right;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exquisite Jewellery</title>
    <link rel="stylesheet" href="path/to/your/bootstrap.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background: #343a40;
            color: #fff;
            padding: 15px 0;
            text-align: center;
        }

        .jumbotron {
    background: url('images/i.jpg') center center;
    background-size: cover;
    color: #fff;
    padding: 85px 0;
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
}

        .jumbotron h2 {
            font-size: 3.5em;
            color: #4caf50;
        }

        .jumbotron p {
            font-size: 1.8em;
            margin-top: 20px;
            color: #4caf50;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 20px;
            font-size: 1.2em;
            background-color: #A0C49D;
           
            
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
        }

        .cta-button:hover {
            background-color: #A0C49D;
        }

        .product-card {
            margin-top: 30px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            margin-top: 10px;
            font-size: 1.5em;
        }
       
    .custom-delete-button {
        background-color: #dc3545; /* Red color */
        color: #fff; /* White text */
        border: none;
        padding: 8px 15px; /* Adjust padding as needed */
        cursor: pointer;
    }

    .custom-delete-button:hover {
        background-color: #c82333; /* Darker red on hover */
    }



        footer {
            background: #343a40;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }
    </style>
</head>
<body>




           




<?php
require_once('../controllers/CommandeController.php');
require_once('../controllers/articleController.php');

$controller = new CommandeController();
$res = $controller->listeCommandes();

if ($res) {
    echo "<table border='1' style='width: 90%; border-collapse: collapse; margin: 20px;'>";
    echo "<tr>";
    echo "<th>ID Commande</th>";
    echo "<th>Nom Article</th>";
    echo "<th>Nom</th>";
    echo "<th>Prenom</th>";
    echo "<th>Ville</th>";
    echo "<th>Telephone</th>";
    echo "<th>Carte Postale</th>";
    echo "<th>Quantité</th>";
    echo "<th>Status</th>";
    echo "<th>Date Commande</th>";
    echo "<th>Action</th>"; 
    echo "</tr>";

    while ($l = $res->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($l['idCommande']) . "</td>";
        echo "<td>" . htmlspecialchars($l['nomArticle']) . "</td>";
        echo "<td>" . htmlspecialchars($l['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($l['prenom']) . "</td>";
        echo "<td>" . htmlspecialchars($l['ville']) . "</td>";
        echo "<td>" . htmlspecialchars($l['telephone']) . "</td>";
        echo "<td>" . htmlspecialchars($l['cartepostale']) . "</td>";
        echo "<td>" . htmlspecialchars($l['Qte']) . "</td>";
        echo "<td>" . htmlspecialchars($l['status']) . "</td>";
        echo "<td>" . htmlspecialchars($l['dateCommande']) . "</td>";
        
        
        echo "<td><button class='btn custom-delete-button' onclick='deleteCommande(" . htmlspecialchars($l['idCommande']) . ")'>Supprimer</button></td>";


        
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Problème lors de l'exécution de la requête.";
}
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
function deleteCommande(idCommande) {
    var confirmDelete = confirm("Êtes-vous sûr de vouloir supprimer cette commande ?");
    if (confirmDelete) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'supprime_commande.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                location.reload(); 
            } else {
                console.error("Erreur lors de la suppression de la commande.");
            }
        };
        xhr.send('idCommande=' + encodeURIComponent(idCommande));
    }
}
</script>

<div class="footer">
    <div class="contact-icons text-center">
        <p class="contact-line"><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )&nbsp;&nbsp;</p>
        <p class="contact-line"><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
    </div>
</div>

</body>
</html>
