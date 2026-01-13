<?php
// Récupérer le nom depuis l'URL, sinon utiliser "visiteur"
$name = isset($_GET['name']) ? $_GET['name'] : "visiteur";

// Récupérer l'âge depuis l'URL, si présent
$age = isset($_GET['age']) ? $_GET['age'] : null;

// Affichage selon les valeurs
if ($age) {
    echo "Bonjour $name, vous avez $age ans !";
} else {
    echo "Bonjour $name !";
}
