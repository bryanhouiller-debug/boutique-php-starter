<?php
// Tableau multidimensionnel de produits
$produits = [
    [
        'nom' => 'Produit 1',
        'prix' => 19.99,
        'stock' => 10
    ],
    [
        'nom' => 'Produit 2',
        'prix' => 29.99,
        'stock' => 5
    ],
    [
        'nom' => 'Produit 3',
        'prix' => 9.99,
        'stock' => 20
    ],
    [
        'nom' => 'Produit 4',
        'prix' => 49.99,
        'stock' => 2
    ],
    [
        'nom' => 'Produit 5',
        'prix' => 15.99,
        'stock' => 50
    ]
];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
</head>
<body>

<?php
// Parcours du tableau de produits
foreach ($produits as $produit) {
    // Affichage des informations de chaque produit
    echo "<article>";
    echo "<h3>" . $produit['nom'] . "</h3>";
    echo "<p class='prix'>" . number_format($produit['prix'], 2, ',', ' ') . " €</p>";
    echo "<p class='stock'>Stock : " . $produit['stock'] . "</p>";
    echo "</article>";
}
?>

</body>
</html>
