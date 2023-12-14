<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Modifier un article</title>
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
            text-align: right; /* Align the text to the right */
        }

        .navbar a {
            display: inline-block; /* Display the links in a line */
            color: white;
            text-decoration: none;
            padding: 14px 16px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        form {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 70%;
            margin: 20px auto;
            margin-bottom: 50px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        input[type="file"] {
            cursor: pointer;
        }

        .custom-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-buttons button {
            flex: 1;
            padding: 8px;
            border: none;
            border-radius: 25px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .custom-buttons #add-btn {
            background-color: #4caf50;
            color: white;
            margin-right: 10px;
        }

        .custom-buttons #cancel-btn {
            background-color: #4caf50;
            color: white;
            margin-left: 10px;
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
    </style>
</head>
<body>

    <div class="navbar">
        <a href="acceuil.php">Accueil</a>
        <a href="ajouter.php">Ajouter </a>
        <a href="supp.php">Supprimer </a>
        <a href="affichearticle.php">Afficher</a>
        <a href="modife.html">Modifier </a>
        <a href="recherche.html">Rechercher </a>
        <a href="listeuser.php">liste users</a>
    </div>

    <!-- Form to enter the ID -->
    <form action="modifer.php" method="post">
        <label>ID Article:</label>
        <input type="text" name="idArticle" required>
        <div class="custom-buttons">
            <button id="add-btn" type="submit">Modifier</button>
        </div>
    </form>

    <?php
    require_once('../controllers/articleController.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idArticle = $_POST['idArticle'];
        $controller = new articleController();
        $article = $controller->getArticleById($idArticle);

        if ($article) {
    ?>

          <form action="modifier.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idArticle" value="<?= htmlspecialchars($article->getIdArticle()) ?>" readonly>

    <label>Nom:</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($article->getNom()) ?>" required>

    <label>Description:</label>
    <input type="text" name="description" value="<?= htmlspecialchars($article->getDescription()) ?>" required>

    <label>Image:</label>
    <?php if ($article->getImage()) : ?>
        <img src="<?= htmlspecialchars($article->getImage()) ?>" alt="Current Image" style="max-width: 200px; margin-bottom: 10px;">
    <?php endif; ?>
    <input type="file" name="image" id="image" accept="images/*">

    <label>Prix:</label>
    <input type="text" name="prix" value="<?= htmlspecialchars($article->getPrix()) ?>" required>

    <label>Quantité en Stock:</label>
    <input type="text" name="qtestock" value="<?= htmlspecialchars($article->getQteStock()) ?>" required>

    <div class="custom-buttons">
        <button id="add-btn" type="submit">Modifier</button>
        <button id="cancel-btn" type="reset">Annuler</button>
    </div>
</form>



    <?php
        }
    }
    ?>

    <div class="footer">
        <div class="contact-icons">
            <p><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )</p>
            <p><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
        </div>
    </div>

</body>
</html>
