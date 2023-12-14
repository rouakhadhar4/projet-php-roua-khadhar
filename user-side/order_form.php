

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Commande</title>
    <!-- Ajouter la CDN de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <div class="card-body">
    <form action='ajoutc.php' method='post'>
        <div class="card">
        <div class="card-header" style="background-color: #ff8080; color: #ffffff;">
    <h2 class="mb-0">Formulaire de Commande</h2>
</div>

            
            <div class="form-group">
                <label for='idCommande'>Id commande</label>
                <input type='text' class="form-control" name='idCommande' readonly>
            </div>

            <div class="form-group">
                <label for='nomArticle'>Nom article:</label>
                <input type='text' class="form-control" name='nomArticle' required>
            </div>

            <div class="form-group">
                <label for='nom'>Nom:</label>
                <input type='text' class="form-control" name='nom' required>
            </div>

            <div class="form-group">
                <label for='prenom'>Prenom:</label>
                <input type='text' class="form-control" name='prenom' required>
            </div>

            <div class="form-group">
                <label for='ville'>Ville:</label>
                <input type='text' class="form-control" name='ville' required>
            </div>

            <div class="form-group">
                <label for='telephone'>Telephone:</label>
                <input type='text' class="form-control" name='telephone' required>
            </div>

            <div class="form-group">
                <label for='cartepostale'>Carte Postale:</label>
                <input type='text' class="form-control" name='cartepostale' required>
            </div>

            <div class="form-group">
                <label for='Qte'>Quantité:</label>
                <input type='text' class="form-control" name='Qte' required>
            </div>

            <div class="form-group">
                <label for='dateCommande'>Date de Commande:</label>
                <input type='text' class="form-control" name='dateCommande' value='<?php echo date('Y-m-d H:i:s'); ?>' readonly>
            </div>

            <div class="form-group">
                <label for='status'>Status:</label>
                <input type='text' class="form-control" name='status' required>
            </div>

            <button type='submit'  style="background-color: #ff8080; color: white;">Commander</button>
        </div>
    </form>
</div>
