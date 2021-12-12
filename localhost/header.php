<?php

$nb = 0;

if (isset($_SESSION['panier'])) 
{
    $nb = count($_SESSION['panier']);
}

?>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/"
           class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span id="title" class="fs-4">Terraverre</span>
        </a>

        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="home.php" class="nav-link px-3">Accueil</a></li>
            <li><a href="shop.php" class="nav-link px-3">Boutique</a></li>
            <li><a href="composition.php" class="nav-link px-3">Composition</a></li>
            <li><a href="tutos.php" class="nav-link px-3">Tutos</a></li>
            <li><a href="contact.php" class="nav-link px-3">Nous contacter</a></li>
            <li><a href="nous.php" class="nav-link px-3">A propos</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a href="panier.php" class="btn btn-outline-primary
                me-2"><?php echo $nb ?> Panier
            </a>
            <a href="login.php" class="btn btn-outline-primary
                me-2">Connexion
            </a>
            <a href="inscription.php" class="btn btn-primary">Inscription</a>
        </div>
    </header>
</div>