<?php
// 1. Indexed Array.
// An indexed array uses numeric keys (0, 1, 2, ...) to store values.
$fruits = array("Apple", "Banana", "Mango"); 
// OR
$fruits = ["Apple", "Banana", "Mango"];

echo $fruits[0]; // Output: Apple
// 2. Associative Array
// An associative array uses named keys (strings) instead of numeric indexes.

$person = array("name" => "Kunal", "age" => 21, "city" => "Indore");
// OR
$person = ["name" => "Kunal", "age" => 21, "city" => "Indore"];

echo $person["name"]; // Output: Kunal


?>