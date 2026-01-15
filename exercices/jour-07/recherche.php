<?php
try {
    $sdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

     $search = $_GET['search'] ?? '';
    $products = [];

    if ($search !== '') {

        // 1. Préparer la requête
        $stmt = $pdo->prepare(
            "SELECT * FROM products WHERE name LIKE ?"
        );

        // 2. Exécuter avec le paramètre
        $stmt->execute(['%' . $search . '%']);

        // 3. Récupérer les résultats
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (PDOExecption $e) {
    die("Erreur : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recherche de produits</title>
</head>
<body>
    
<h2>Recherche</h2>

<form method="get">
    <input type="text" name="search" placeholder="Nom du produit"
    value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Rechercher</button>
</form>

<hr>

 <?php if ($search !== ''): ?>

    <?php if (empty($products)): ?>
        <p>Aucun produit trouvé</p>
    <?php else: ?>
        <ul>
            <?php foreach ($products as $product): ?>
                <li>
                    <?= $product['name'] ?> —
                    <?= $product['price'] ?> €
                </li>
            <?php endforeach; ?>
        </ul>
      <?php endif; ?>

 <?php endif; ?>
            
</body>
</html>
