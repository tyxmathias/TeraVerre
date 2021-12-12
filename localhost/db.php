<?php

// Connexion à la base de données
function getPDO()
{
    try {
        $PDO = new PDO("mysql:host=localhost;dbname=terraverre", "root"
            , "");
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $PDO;
    } catch (PDOException $e) {
        echo "Erreur" . $e->getMessage();
    }
}

// Récupération des produits dans la base de données
function getProduits()
{
    $pdo = getPDO();
    $requete = $pdo->prepare("select * from produit");
    $requete->execute();
    $requete->setFetchMode(PDO::FETCH_ASSOC);
    return $requete->fetchAll();
    $pdo->close();
}



