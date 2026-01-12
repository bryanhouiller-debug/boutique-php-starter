<?php
// Déclaration des variables
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

// Comparaison avec '=='
echo "<h3>Comparaisons avec == :</h3>";
echo "a == b: ";
var_dump($a == $b);  // 0 == "" => true (conversion implicite)
echo "<br>";

echo "a == c: ";
var_dump($a == $c);  // 0 == null => true (conversion implicite)
echo "<br>";

echo "a == d: ";
var_dump($a == $d);  // 0 == false => true (conversion implicite)
echo "<br>";

echo "a == e: ";
var_dump($a == $e);  // 0 == "0" => true (conversion implicite)
echo "<br>";

echo "b == c: ";
var_dump($b == $c);  // "" == null => true (conversion implicite)
echo "<br>";

echo "b == d: ";
var_dump($b == $d);  // "" == false => true (conversion implicite)
echo "<br>";

echo "b == e: ";
var_dump($b == $e);  // "" == "0" => true (conversion implicite)
echo "<br>";

echo "c == d: ";
var_dump($c == $d);  // null == false => true (conversion implicite)
echo "<br>";

echo "c == e: ";
var_dump($c == $e);  // null == "0" => true (conversion implicite)
echo "<br>";

echo "d == e: ";
var_dump($d == $e);  // false == "0" => true (conversion implicite)
echo "<br>";

// Comparaison avec '==='
echo "<h3>Comparaisons avec === :</h3>";
echo "a === b: ";
var_dump($a === $b);  // 0 === "" => false (pas de conversion de type)
echo "<br>";

echo "a === c: ";
var_dump($a === $c);  // 0 === null => false (pas de conversion de type)
echo "<br>";

echo "a === d: ";
var_dump($a === $d);  // 0 === false => false (pas de conversion de type)
echo "<br>";

echo "a === e: ";
var_dump($a === $e);  // 0 === "0" => false (pas de conversion de type)
echo "<br>";

echo "b === c: ";
var_dump($b === $c);  // "" === null => false (pas de conversion de type)
echo "<br>";

echo "b === d: ";
var_dump($b === $d);  // "" === false => false (pas de conversion de type)
echo "<br>";

echo "b === e: ";
var_dump($b === $e);  // "" === "0" => false (pas de conversion de type)
echo "<br>";

echo "c === d: ";
var_dump($c === $d);  // null === false => false (pas de conversion de type)
echo "<br>";

echo "c === e: ";
var_dump($c === $e);  // null === "0" => false (pas de conversion de type)
echo "<br>";

echo "d === e: ";
var_dump($d === $e);  // false === "0" => false (pas de conversion de type)
echo "<br>";
?>
