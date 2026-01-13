<?php
// helpers.php : regroupe toutes les fonctions utiles

// Formatage d'un prix
function formatPrice($amount, $currency = "€", $decimals = 2) {
    return number_format($amount, $decimals, ",", " ") . " " . $currency;
}

// Vérifie si le produit est en stock
function isInStock($stock) {
    return $stock > 0;
}

// Vérifie si le produit est en promotion
function isOnSale($discount) {
    return $discount > 0;
}

// Calcule le prix après remise
function calculateDiscount($price, $percentage) {
    return $price - ($price * $percentage / 100);
}

// Affiche le stock avec couleur
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

// Affiche un badge coloré
function displayBadge($text, $color) {
    return "<span style='background:$color;color:#fff;padding:3px 6px;border-radius:4px;'>$text</span>";
}
