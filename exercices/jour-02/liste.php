<?php

$groceries = ["cannette", "mayonnaise", "Lait", "farine", "Œufs"];

// Premier article
echo "Premier article : " . $groceries[0] . "\n";

// Dernier article
$dernier_index = count($groceries) - 1;
echo "Dernier article : " . $groceries[$dernier_index] . "\n";

// Nombre total d'articles
echo "Nombre total d'articles : " . count($groceries) . "\n";

// Ajouter 2 articles
$groceries[] = "Fromage";
$groceries[] = "Tomates";

// Supprimer le 3ème article (index 2)
unset($groceries[2]);

// Réindexer pour avoir des indices consécutifs
$groceries = array_values($groceries);

// Afficher le tableau final
var_dump($groceries);
?>
