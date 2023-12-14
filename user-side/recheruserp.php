<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Résultats de la recherche</title>
    <style>
        body {
            background-color: #f5f5f5;
        }

        .container {
            margin-top: 50px;
        }

        .table img {
            max-width: 50px;
            max-height: 50px;
        }
    </style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
    <!-- Ajoutez ici vos liens vers des fichiers CSS ou d'autres bibliothèques si nécessaire -->
</head>
<body>

<div class="container">
    <h2>Résultats de la recherche</h2>

    <?php
    require_once('../controllers/articleController.php');

    if (isset($_GET['category']) && isset($_GET['value'])) {
        $category = $_GET['category'];
        $value = $_GET['value'];

        $controller = new ArticleController();
        $results = $controller->recherche($category, $value);

        if ($results) {
            echo "<table border='1'>";
            echo "<tr><th>Nom</th><th>Description</th><th>Image</th><th>Prix</th></tr>";

            foreach ($results as $result) {
                echo "<tr>";
              
                echo "<td>" . htmlspecialchars($result['nom']) . "</td>";
                echo "<td>" . htmlspecialchars($result['description']) . "</td>";
                echo "<td><img src='images/" . htmlspecialchars($result['image']) . "' alt='Image' style='width:100px;'></td>";
                echo "<td>" . htmlspecialchars($result['prix']) . "</td>";
              
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Aucun résultat trouvé.";
        }
    } else {
        echo "Veuillez fournir des données de recherche.";
    }
    ?>
</div>



</body>
</html>








</body>
</html>
