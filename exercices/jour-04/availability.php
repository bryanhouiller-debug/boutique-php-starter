<?php
// Déclaration des variables
$stock = 10; // Exemple de stock
$active = true; // Le produit est actif
$promoEndDate = "2024-12-31"; // Date de fin de promo

// Vérification de la disponibilité du produit
$isAvailable = ($stock > 0 && $active);

// Vérification de la promo
$currentDate = date("Y-m-d"); // Date actuelle au format YYYY-MM-DD
$isPromo = (strtotime($currentDate) < strtotime($promoEndDate));

// Affichage des différents statuts
echo "<h2>Product Status:</h2>";

if ($isAvailable) {
    echo "<p><span style='color: green;'>Available</span></p>";
} else {
    echo "<p><span style='color: red;'>Not Available</span></p>";
}

if ($isPromo) {
    echo "<p><span style='color: orange;'>On Promo</span></p>";
} else {
    echo "<p><span style='color: gray;'>Promo Ended</span></p>";
}
?>
