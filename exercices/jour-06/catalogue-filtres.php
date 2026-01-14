<?php

$products = [
    ['name' => 'Laptop', 'price' => 1200, 'category' => 'Électronique', 'inStock' => true],
    ['name' => 'Souris', 'price' => 25, 'category' => 'Électronique', 'inStock' => true],
    ['name' => 'Clavier', 'price' => 45, 'category' => 'Électronique', 'inStock' => false],
    ['name' => 'Casque', 'price' => 80, 'category' => 'Électronique', 'inStock' => true],

    ['name' => 'Chaise', 'price' => 150, 'category' => 'Mobilier', 'inStock' => true],
    ['name' => 'Bureau', 'price' => 300, 'category' => 'Mobilier', 'inStock' => false],
    ['name' => 'Table', 'price' => 250, 'category' => 'Mobilier', 'inStock' => true],
    ['name' => 'Étagère', 'price' => 120, 'category' => 'Mobilier', 'inStock' => true],

    ['name' => 'Lampe', 'price' => 40, 'category' => 'Maison', 'inStock' => true],
    ['name' => 'Canapé', 'price' => 800, 'category' => 'Maison', 'inStock' => true],
    ['name' => 'Tapis', 'price' => 90, 'category' => 'Maison', 'inStock' => false],

    ['name' => 'Livre PHP', 'price' => 35, 'category' => 'Livres', 'inStock' => true],
    ['name' => 'Livre JS', 'price' => 30, 'category' => 'Livres', 'inStock' => true],
    ['name' => 'Roman', 'price' => 18, 'category' => 'Livres', 'inStock' => true],
    ['name' => 'BD', 'price' => 22, 'category' => 'Livres', 'inStock' => false],
];

$search    = $_GET['search'] ?? '';
$category  = $_GET['category'] ?? '';
$maxPrice  = $_GET['max_price'] ?? '';
$inStock   = isset($_GET['in_stock']);

$filteredProducts = [];

foreach ($products as $product) {

    // Recherche par nom
    if ($search !== '' && stripos($product['name'], $search) === false) {
        continue;
    }

    // Filtre catégorie
    if ($category !== '' && $product['category'] !== $category) {
        continue;
    }

    // Filtre prix max
    if ($maxPrice !== '' && $product['price'] > $maxPrice) {
        continue;
    }

    // En stock uniquement
    if ($inStock && !$product['inStock']) {
        continue;
    }

    // Si le produit passe tous les filtres
    $filteredProducts[] = $product;
}

?>

<form method="get">
    <input type="text" name="search" placeholder="Recherche par nom"
           value="<?= htmlspecialchars($search) ?>">

    <select name="category">
        <option value="">-- Catégorie --</option>
        <?php
        $categories = ['Électronique', 'Mobilier', 'Maison', 'Livres'];
        foreach ($categories as $cat) {
            $selected = ($category === $cat) ? 'selected' : '';
            echo "<option value=\"$cat\" $selected>$cat</option>";
        }
        ?>
    </select>

    <input type="number" name="max_price" placeholder="Prix max"
           value="<?= htmlspecialchars($maxPrice) ?>">

    <label>
        <input type="checkbox" name="in_stock" value="1"
               <?= $inStock ? 'checked' : '' ?>>
        En stock uniquement
    </label>

    <button type="submit">Filtrer</button>
</form>

<h2>Résultats</h2>

<?php if (empty($filteredProducts)) : ?>
    <p>Aucun produit trouvé.</p>
<?php else : ?>
    <ul>
        <?php foreach ($filteredProducts as $product) : ?>
            <li>
                <strong><?= $product['name'] ?></strong> —
                <?= $product['price'] ?> € —
                <?= $product['category'] ?> —
                <?= $product['inStock'] ? 'En stock' : 'Rupture' ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
