<?php

include_once('../../controllers/produitController.php');
$produitController = new ProduitController();
$products = $produitController->liste();
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<div class="container mt-5">
    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="../../images/<?php echo $product['image_path']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name']; ?></h5>
                        <p class="card-text">Prix: <?php echo $product['price']; ?> €</p>
                        <a href="order.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Commander</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
