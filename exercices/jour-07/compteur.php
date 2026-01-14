<?php
session_start(); // 🔑 démarre la session (OBLIGATOIRE)

// Si le compteur n'existe pas encore, on le crée
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}

// Incrémenter le compteur
$_SESSION['visits']++;

// Réinitialisation
if (isset($_GET['reset'])) {
    $_SESSION['visits'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>compteur de visites</title>
</head>
<body>
    
    <p>Vous avez visité cette page <?= $_SESSION['visits'] ?> fois</p>

    <a href="?reset=1">Réinitialiser</a>

</body>
</html>
