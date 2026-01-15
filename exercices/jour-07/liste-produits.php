<?php
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // 1. Préparer la requête
    $stmt = $pdo->query("SELECT * FROM products");

    // 2. Récupérer tous les produits
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>

<h2>Produits</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['price'] ?> €</td>
            <td><?= $product['stock'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
