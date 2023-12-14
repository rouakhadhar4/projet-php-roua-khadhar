<?php
require_once('../controllers/articleController.php');


$categorieCtr = new articleController(); 

$categorieCtr->delete($_GET['idArticle']);



?>

