<?php
session_start();

require 'db.php';


function ajouterAuPanier($id, $nom, $price, $image, $quantite)
{
    $_SESSION['panier'][$id] = array(
        'id' => $id,
        'nom' => $nom,
        'quantite' => $quantite,
        'image' => $image,
        'price' => $price);
}

if (isset($_POST['image']) && isset($_POST['price']) && isset($_POST['nom']) && isset
    ($_POST['quantite']) && isset($_POST['productId'])) {

    $id = $_POST['productId'];
    $name = $_POST['nom'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $quantite = $_POST['quantite'];

    ajouterAuPanier($id, $name, $price, $image, $quantite);
}

$products = getProduits();
?>


<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>
<body>

<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <?php foreach ($products as $product): ?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $product['image'] ?>" class="card-img-top" height="270px">

                <div class="card-body">
                    <h5 class="card-title"><?= $product["nom"] ?></h5>
                    <form action="" method="post">
                        <input class="form-control" type="hidden" name="productId"
                               value="<?= $product['id'] ?>">
                        <input class="form-control" type="hidden" name="nom"
                               value="<?= $product['nom'] ?>">
                        <input class="form-control" type="hidden" name="price"
                               value="<?= $product['prix'] ?>">
                        <input class="form-control" type="hidden" name="image"
                               value="<?= $product['image'] ?>">

                        <div class="mb-3">
                            <input class="form-control form-control-sm" value="1"
                                   type="number" name="quantite"
                                   max="9000" min="1">
                        </div>
                        <div class="mb-3">
                            <input class="btn btn-primary" type="submit" name="add"
                                   value="Ajouter">
                        </div>
                    </form>
                    <h4>
                        <span class="badge bg-warning"><?= $product['prix'] ?> €</span>
                    </h4>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
