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
            background-color: #A0C49D;
            color: white;
            margin-right: 10px;
        }

        .custom-buttons #cancel-btn {
            background-color: #A0C49D;;
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
<?php
require_once('../controllers/articleController.php');
$clientCtr = new articleController();
$res = $clientCtr->getarticle($_GET['idArticle']);

?>
<form action="modifer.php" method="post" enctype="multipart/form-data">
   

    <label>ID Article:</label>
    <input type="text" name="idArticle" value="<?php echo isset($res['idArticle']) ? htmlspecialchars($res['idArticle']) : ''; ?>" required>

    <label>Nom:</label>
    <input type="text" name="nom" value="<?php echo isset($res['nom']) ? htmlspecialchars($res['nom']) : ''; ?>" required>

    <label>Description:</label>
    <input type="text" name="description" value="<?php echo isset($res['description']) ? htmlspecialchars($res['description']) : ''; ?>" required>

    <div class="form-group">
        <label for="image">Image:</label>
        <?php if (isset($res['image']) && !empty($res['image'])) : ?>
            <img src="<?php echo 'images/' . htmlspecialchars($res['image']); ?>" alt="Product Image" class="img-thumbnail mt-2" style="max-width: 200px; max-height: 200px;">
        <?php endif; ?>
        <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
    </div>

    <label>Prix:</label>
    <input type="text" name="prix" value="<?php echo isset($res['prix']) ? htmlspecialchars($res['prix']) : ''; ?>" required>

    <label>Quantité en Stock:</label>
    <input type="text" name="qtestock" value="<?php echo isset($res['qtestock']) ? htmlspecialchars($res['qtestock']) : ''; ?>" required>

    <div class="custom-buttons">
        <button id="add-btn" type="submit">Modifier</button>
        <button id="cancel-btn" type="reset">Annuler</button>
    </div>
</form>

