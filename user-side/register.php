<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Inscription</h2>
    <form action="register_process.php" method="post">
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" name="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>

        <input type="submit" value="S'inscrire">
    </form>
</body>
</html>
