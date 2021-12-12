<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'head.php' ?>

<body>
<?php include 'header.php' ?>

<div class="container">
    <h2>Nous contacter</h2>
    <form>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"
                   placeholder="Adresse email...">
        </div>
        <div class="form-group">
            <label for="msg">Message</label>
            <textarea class="form-control" id="msg" rows="3"></textarea>
        </div>
        <br>
        <input class="btn btn-primary" type="submit"
               value="Envoyer">
    </form>
</div>

<?php include 'footer.php' ?>
</body>

</html>
