<?php

// Affiche un badge coloré
function displayBadge($text, $color) {
    return "<span class='badge' style='background: $color; padding: 3px 6px; border-radius: 4px; color: #fff;'>$text</span>";
}

// Affiche un prix, avec remise éventuelle
function displayPrice($price, $discount = 0) {
    if ($discount > 0) {
        $discountedPrice = $price - ($price * $discount / 100);
        return "<span style='text-decoration: line-through; color: #999;'>$price €</span> <span style='color: red;'>$discountedPrice €</span>";
    }
    return "$price €";
}

// Affiche le stock avec couleur selon la quantité
function displayStock($quantity) {
    if ($quantity > 10) {
        $color = "green";
        $text = "En stock";
    } elseif ($quantity > 0) {
        $color = "orange";
        $text = "Peu d'articles";
    } else {
        $color = "red";
        $text = "Rupture";
    }
    return "<span style='color: $color;'>$text</span>";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice affichage</title>
</head>
<body>
    <h1>Exemple boutique</h1>

    <p><?= displayBadge("Nouveau", "blue") ?></p>
    <p><?= displayBadge("Promotion", "red") ?></p>

    <p>Prix produit 1 : <?= displayPrice(100) ?></p>
    <p>Prix produit 2 : <?= displayPrice(100, 20) ?></p>

    <p>Stock produit 1 : <?= displayStock(15) ?></p>
    <p>Stock produit 2 : <?= displayStock(5) ?></p>
    <p>Stock produit 3 : <?= displayStock(0) ?></p>
</body>
</html>
