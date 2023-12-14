<?php

require_once('../controllers/UserController.php');
require_once('../models/User.php');

// Assuming you have received form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Create a User instance
$newUser = new User($username, $password, $email);

// Create UserController instance
$userController = new UserController();

// Call registerUser method with the User instance
$registrationSuccess = $userController->registerUser($newUser);

if ($registrationSuccess) {
    echo "User registration successful!";
} else {
    echo "User registration failed.";
}

