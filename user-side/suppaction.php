<?php
require_once('../controllers/articleController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idArticle = $_POST['i'];

    $controller = new articleController();

    try {
        $rowsAffected = $controller->delete($idArticle);

        if ($rowsAffected > 0) {
            echo "<script>alert('Article deleted successfully.');</script>";
        } else if ($rowsAffected === 0) {
            echo "<script>alert('No matching article found for deletion.');</script>";
        } else {
            echo "<script>alert('Failed to delete article. An unexpected error occurred.');</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Failed to delete article. Database error: " . $e->getMessage() . "');</script>";
    }
}
?>
