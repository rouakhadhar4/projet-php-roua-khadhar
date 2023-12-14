<?php
require_once('../controllers/CommandController.php');

$commandController = new CommandController();

// Check if the form is submitted for adding a new command
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form submission
    $commandController->processAddCommand();
} else {
    // Display the add command form
    $commandController->displayAddCommandForm();
}
?>
