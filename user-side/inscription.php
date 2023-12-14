
<?php
include_once('../controllers/AuthController.php');
include_once('../models/UserModel.php');

$authController = new AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $user = new UserModel($name, $password, $email);

    $res = $authController->insert($user);

    echo "<script>";
    if ($res) {
        echo "alert('Vous êtes inscrit.');";
    } else {
        echo "alert('Erreur lors de l\'insertion de l'utilisateur.');";
    }
    echo "</script>";
}
?>

