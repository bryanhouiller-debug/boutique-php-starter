
<?php
// 1️⃣ Création du tableau de catégories
$categories = ["Vêtements", "Chaussures", "Accessoires", "Sport"];

// 2️⃣ Vérifie si "Chaussures" existe dans le tableau
if (in_array("Chaussures", $categories)) {
    echo "Chaussures : Trouvé !<br>";
} else {
    echo "Chaussures : Non trouvé<br>";
}

// 3️⃣ Vérifie si "Électronique" existe
if (in_array("Électronique", $categories)) {
    echo "Électronique : Trouvé !<br>";
} else {
    echo "Électronique : Non trouvé<br>";
}

// 4️⃣ Utilisation de array_search() pour trouver l'index de "Sport"
$indexSport = array_search("Sport", $categories);
if ($indexSport !== false) {
    echo "L'index de 'Sport' est : $indexSport";
} else {
    echo "'Sport' non trouvé dans le tableau";
}
?>

