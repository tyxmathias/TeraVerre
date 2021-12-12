<?php
session_start();

$panier = array();
$total = 0;

if (isset($_SESSION['panier']) and  count($_SESSION['panier']) > 0) {
    $total =  count($_SESSION['panier']) - 1;
    $panier = $_SESSION['panier'];
}

// Suppression
if (isset($_POST['supp'])) {
    unset($_SESSION['panier'][$_POST['id']]);
}

?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>
<body>
<?php include 'header.php' ?>

<div class="container">
    <h1>Panier</h1>

    <br>

    <?php foreach ($panier as $product): $total += $product['price'] *
        $product['quantite'] ?>

        <div class="card">
            <div class="card-body">
                <h3 class="card-title"><?= $product['nom'] ?></h3>
                <h4><span class="badge bg-primary"><?= $product['price'] ?> €
                        l'unité</span></h4>

                <ul>
                    <?php 
                    if (isset($product['composants'])) 
                    {
                        foreach ($product['composants'] as $composant)
                        {
                            echo "<li>$composant</li>";
                        }
                    }
                    ?>
                </ul>

                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    Quantité : <input class="button card" type="number" name="quantite"
                                      value="<?= $product['quantite'] ?>" max="9000"
                                      min="1">
                </form>

                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <input class="btn btn-outline-primary" type="submit" name="supp"
                           value="Supprimer">
                </form>
            </div>
        </div>
    <?php endforeach; ?>

    <br>
    <h3><span class="badge bg-primary">Total : <?= $total ?> € </span></h3>
    <br>

    <form action="" method="post">
        <input class="btn btn-primary" type="submit" name="order" value="Commander">
    </form>
</div>

<?php include 'footer.php' ?>
</body>
</html>