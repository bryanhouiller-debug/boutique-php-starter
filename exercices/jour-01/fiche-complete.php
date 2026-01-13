<?php
// Helpers simples pour cette fiche
function formatPrice($amount, $currency = "€", $decimals = 2) {
    return number_format($amount, $decimals, ",", " ") . " " . $currency;
}

function calculateVAT($priceHT, $rate) {
    return $priceHT * $rate / 100;
}

function calculateIncludingTax($priceHT, $rate) {
    return $priceHT + calculateVAT($priceHT, $rate);
}

function calculateDiscount($price, $percentage) {
    return $price - ($price * $percentage / 100);
}

function displayStock($quantity) {
    if ($quantity > 10) return "<span style='color:green;'>En stock</span>";
    elseif ($quantity > 0) return "<span style='color:orange;'>Peu d'articles</span>";
    else return "<span style='color:red;'>Rupture</span>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche Produit Complète</title>
    <style>
        .fiche-produit { 
            border: 1px solid #ccc; 
            padding: 20px; 
            width: 300px; 
            font-family: Arial, sans-serif;
            border-radius: 8px;
        }
        .prix { font-weight: bold; font-size: 1.2em; }
        .prix-remise { color: red; }
        .stock { margin-top: 10px; }
    </style>
</head>
<body>

<?php
// Données produit
$name = "Chaussures de sport";
$description = "Chaussures confortables pour la course et le sport.";
$priceHT = 120;
$vatRate = 20;
$stock = 5;
$discount = 15; // en pourcentage

// Calculs
$vatAmount = calculateVAT($priceHT, $vatRate);
$priceTTC = calculateIncludingTax($priceHT, $vatRate);
$priceDiscounted = calculateDiscount($priceTTC, $discount);
?>

<div class="fiche-produit">
    <h2><?= $name ?></h2>
    <p><?= $description ?></p>

    <p>Prix HT : <span class="prix"><?= formatPrice($priceHT) ?></span></p>
    <p>TVA (<?= $vatRate ?>%) : <?= formatPrice($vatAmount) ?></p>
    <p>Prix TTC : <span class="prix"><?= formatPrice($priceTTC) ?></span></p>

    <?php if($discount > 0): ?>
        <p>Remise (<?= $discount ?>%) : 
            <span class="prix-remise"><?= formatPrice($priceDiscounted) ?></span>
        </p>
    <?php endif; ?>

    <p class="stock">Stock : <?= displayStock($stock) ?></p>
</div>

</body>
</html>
