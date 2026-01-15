<?php
// Connexion PDO
$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev",
    "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

/* =========================
   CREATE
========================= */
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "add") {
    $stmt = $pdo->prepare(
        "INSERT INTO products (name, price, stock) VALUES (?, ?, ?)"
    );
    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"]
    ]);
    header("Location: admin-produits.php");
    exit;
}

/* =========================
   UPDATE
========================= */
if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["action"] === "update") {
    $stmt = $pdo->prepare(
        "UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?"
    );
    $stmt->execute([
        $_POST["name"],
        $_POST["price"],
        $_POST["stock"],
        $_POST["id"]
    ]);
    header("Location: admin-produits.php");
    exit;
}

/* =========================
   DELETE
========================= */
if (isset($_GET["delete"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_GET["delete"]]);
    header("Location: admin-produits.php");
    exit;
}

/* =========================
   EDIT (charger un produit)
========================= */
$productToEdit = null;
if (isset($_GET["edit"])) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$_GET["edit"]]);
    $productToEdit = $stmt->fetch(PDO::FETCH_ASSOC);
}

/* =========================
   READ
========================= */
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin produits</title>
</head>
<body>

<h2>Liste des produits</h2>

<table border="1" cellpadding="8">
    <tr>
        <th>Nom</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product["name"] ?></td>
            <td><?= $product["price"] ?> €</td>
            <td><?= $product["stock"] ?></td>
            <td>
                <a href="?edit=<?= $product["id"] ?>">Modifier</a>
                |
                <a href="?delete=<?= $product["id"] ?>"
                   onclick="return confirm('Supprimer ce produit ?')">
                   Supprimer
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<hr>

<h2><?= $productToEdit ? "Modifier un produit" : "Ajouter un produit" ?></h2>

<form method="post">
    <input type="hidden" name="action"
           value="<?= $productToEdit ? 'update' : 'add' ?>">

    <?php if ($productToEdit): ?>
        <input type="hidden" name="id" value="<?= $productToEdit["id"] ?>">
    <?php endif; ?>

    <input type="text" name="name" placeholder="Nom"
           value="<?= $productToEdit["name"] ?? '' ?>" required>

    <input type="number" name="price" placeholder="Prix"
           value="<?= $productToEdit["price"] ?? '' ?>" required>

    <input type="number" name="stock" placeholder="Stock"
           value="<?= $productToEdit["stock"] ?? '' ?>" required>

    <button type="submit">
        <?= $productToEdit ? "Modifier" : "Ajouter" ?>
    </button>
</form>

</body>
</html>
