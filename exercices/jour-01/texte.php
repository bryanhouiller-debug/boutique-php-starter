<?php

// Déclaration des variables
$brand = "Nike";
$model = "Air Max";

echo "<h3>1️⃣ Concaténation</h3>";
echo "Chaussures " . $brand . " " . $model . "<br>";

echo "<h3>2️⃣ Interpolation</h3>";
echo "Chaussures $brand $model<br>";

echo "<h3>3️⃣ sprintf()</h3>";
echo sprintf("Chaussures %s %s<br>", $brand, $model);

echo "<hr>";

echo "<h3>Différence quotes simples vs doubles</h3>";
$price = 99.99;

echo "Double quotes : Prix : $price €<br>"; // Interpolation active
echo 'Single quotes : Prix : $price €<br>'; // Interpolation inactive
