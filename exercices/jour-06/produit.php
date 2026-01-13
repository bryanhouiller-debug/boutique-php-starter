<?php
// Tableau de produits (clé = ID)
$products = [
    1 => ["name" => "T-shirt", "price" => 29.99],
    2 => ["name" => "Jean", "price" => 79.99],
    3 => ["name" => "Chaussures", "price" => 119.99],
    4 => ["name" => "Veste", "price" => 149.99],
    5 => ["name" => "Casquette", "price" => 19.99],
];

// Récupérer l'id depuis l'URL
$id = $_GET["id"] ?? null;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit</title>
</head>
<body>

<?php
// Vérifier si l'id existe et si le produit est dans le tableau
if ($id !== null && isset($products[$id])) {
    $product = $products[$id];
    echo "<h2>{$product['name']}</h2>";
    echo "<p>Prix : {$product['price']} €</p>";
} else {
    echo "<p>Produit non trouvé</p>";
}
?>

</body>
</html>
