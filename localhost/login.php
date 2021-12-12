<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>

<body>
<?php include 'header.php' ?>

<div class="container">
    <h2>Connexion</h2>
    <br>

    <form action="" method="post">
        <div class="mb-3">
            <input class="form-control" type="text" name="username"
                   placeholder="Username...">
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" name="password"
                   placeholder="Password...">
        </div>
        <input class="btn btn-primary" type="submit"
               value="Connexion">
    </form>
</div>

<?php include 'footer.php' ?>
</body>

</html>
