<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h2>Bonjour <?= $_SESSION["user"] ?> !</h2>

<p>Bienvenue sur votre tableau de bord.</p>

<a href="logout.php">Se déconnecter</a>

</body>
</html>
