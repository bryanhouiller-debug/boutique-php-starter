<?php

$name = "Casque Bluetooth";
$price = 79.99;
$stock = 5; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $name ?></title>
</head>
<body>

    <h1><?= $name ?></h1>

    <p>Prix : <?= $price ?> €</p>

    <span>
        <?php
        if ($stock > 0) {
            echo "En stock";
        } else {
            echo "Rupture";
        }
        ?>
    </span>

</body>
</html>
