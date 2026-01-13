<?php
// Tableau de produits
$products = [
    ["name" => "T-shirt"],
    ["name" => "Jean"],
    ["name" => "Chaussures"],
    ["name" => "Veste"],
    ["name" => "Casquette"],
    ["name" => "Pull"],
    ["name" => "Sweat"],
    ["name" => "Short"],
    ["name" => "Pantalon"],
    ["name" => "Chaussettes"],
];

// Récupérer le terme de recherche
$search = $_GET['search'] ?? '';

// Tableau des résultats
$results = [];

// Filtrage si recherche effectuée
if ($search !== '') {
    foreach ($products as $product) {
        if (stripos($product["name"], $search) !== false) {
            $results[] = $product;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche</title>
</head>
<body>

<h2>Recherche de produits</h2>

<form method="GET">
    <input
        type="text"
        name="search"
        placeholder="Rechercher un produit"
        value="<?= htmlspecialchars($search) ?>"
    >
    <button type="submit">Rechercher</button>
</form>

<hr>

<?php if ($search === ''): ?>
    <p>Entrez un mot pour lancer la recherche.</p>

<?php elseif (empty($results)): ?>
    <p>Aucun résultat</p>

<?php else: ?>
    <ul>
        <?php foreach ($results as $product): ?>
            <li><?= htmlspecialchars($product["name"]) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>
