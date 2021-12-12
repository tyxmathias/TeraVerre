<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>

<body>
<?php include 'header.php' ?>

<div class="container">
    <h2>Inscription</h2>
    <br>

    <form action="" method="post">
        <div class="mb-3">
            <input class="form-control" type="text" name="email"
                   placeholder="Email...">
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="mdp"
                   placeholder="Môt de passe...">
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="mdp2"
                   placeholder="Répétez le môt de passe...">
        </div>
        <input class="btn btn-primary" type="submit"
               value="S'inscrir">
    </form>
</div>

<?php include 'footer.php' ?>
</body>

</html>
