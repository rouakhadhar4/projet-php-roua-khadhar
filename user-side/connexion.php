<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Connexion</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 400px;
            margin: 100px auto; /* Center horizontally and add top margin */
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fce4ec; /* Light pink background color */
        }

        h2 {
            text-align: center;
            color: #e91e63; /* Pink header color */
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #e91e63; /* Pink button color */
            border: none;
            width: 100%; /* Make the button full-width */
        }

        .btn-primary:hover {
            background-color: #c2185b; /* Darker pink on hover */
        }

        a {
            color: #e91e63; /* Pink link color */
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <form action="login.php" method="post">
       
            <div class="mb-3">
                <label for="username" class="form-label">Nom d'utilisateur :</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Se connecter"  formaction="order_form.php">
        </form>

   
        <p>Vous n'avez pas de compte ? <a href="inscription.html">Inscrivez-vous ici</a>.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
