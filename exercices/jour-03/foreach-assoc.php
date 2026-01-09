<?php
// Création du tableau associatif
$personne = [
    'name' => 'John Doe',
    'age' => 30,
    'city' => 'Paris',
    'job' => 'Développeur'
];

// Parcours du tableau avec foreach
foreach ($personne as $key => $value) {
    // Affichage de la clé et de la valeur
    echo "<strong>$key</strong> : $value<br>";
}
?>
