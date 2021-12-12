<?php
session_start();

$tuto = array(
        array('titre' => 'Terrarium désert', 'image' => 'images/desert.jpg'),
     array('titre' => 'Entretient des terrariums', 'image' => 'images/entretient.webp'),
);

?>


<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>
<body>

<?php include 'header.php' ?>

<div class="container">
    <h2>Tutos</h2>
    <div class="row">
        <?php foreach ($tuto as $tuto): ?>

            <div class="card" style="width: 18rem;">
                <img src="<?= $tuto['image'] ?>" class="card-img-top" height="270px">

                <div class="card-body">
                    <h5 class="card-title"><?= $tuto["titre"] ?></h5>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>
