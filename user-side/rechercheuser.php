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
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px;
            text-align: right;
            color: white;
            width: 100%;
            float: right;
        }

        .navbar a {
            float: none;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 20px auto;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
            font-size: 16px;
        }

        input,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color:#007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #007bff;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            width: 100%;
            white-space: nowrap;
            margin-top: auto;
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
    <title>Rechercher un article</title>
</head>
<body>

<div class="navbar">
    <a href="index.php">Accueil</a>
    <a href="shop.php">shop</a>
    <a href="rechercheuser.php">recherche</a>
    <a href="deconnexionuser.php">Deconnexion</a>

 
</div>


    <form action="recheruserp.php" method="get">
        <label for="category">Rechercher par:</label>
        <select id="category" name="category" required>
            
            <option value="nom">Nom</option>
            
           
           
        </select>
        <label for="value">Valeur:</label>
        <input type="text" id="value" name="value" required>
        <button type="submit">Rechercher</button>
    </form>

    <div class="footer">
        <div class="contact-icons text-center">
            <p class="contact-line"><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )&nbsp;&nbsp;</p>
            <p class="contact-line"><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
        </div>
    </div>

</body>
</html>
