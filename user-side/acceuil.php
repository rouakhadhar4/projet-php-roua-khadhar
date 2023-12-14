<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

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

        footer {
            background: #343a40;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<header style="background-color: #618264; color: white;">
    <h1>Exquisite Jewellery</h1>
</header>



<section class="jumbotron">
    <div class="container">
        <h2 class="lead">Explore Our Exquisite Jewellery</h2>
        <p class="lead">Discover elegance and style with our handcrafted collection of fine jewelry.</p>
        <a href="boutique.php" class="cta-button">View our new collection 2023</a>
    </div>
</section>


           

<div class="footer">
    <div class="contact-icons text-center">
        <p class="contact-line"><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )&nbsp;&nbsp;</p>
        <p class="contact-line"><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
    </div>
</div>

</body>
</html>
