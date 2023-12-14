<?php
session_start(); // Start the session

include_once('../controllers/AuthController.php');
include_once('../models/UserModel.php');

$authController = new AuthController();
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

  
    if (!empty($name) && !empty($password)) {
        try {
            $userModel = new UserModel();
            $isUserRegistered = $userModel->isUserRegistered($name);

            if ($isUserRegistered && $authController->login($name, $password)) {
                
                $_SESSION['username'] = $name;

              
                header('Location: order_form.php');
                exit();
            } else {
               
                $errorMessage = $isUserRegistered ? "Mot de passe incorrect." : "Utilisateur non enregistré. Veuillez vous inscrire.";
            }
        } catch (Exception $e) {
           
            $errorMessage = "Une erreur est survenue lors de la connexion.";
        }
    } else {
        
        $errorMessage = "Veuillez fournir un nom d'utilisateur et un mot de passe.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>

    <?php if (!empty($errorMessage)) : ?>
     
        <div style="color: red;"><?php echo $errorMessage; ?></div>
    <?php endif; ?>

 
    <p>Not registered? <a href="inscription.html">Register here</a></p>

</body>

</html>
