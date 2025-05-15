<?php
//🔹 1. count() – Count elements in an array
$arry = ["a","b","c"];
echo count($arry);
array_push($arry, "d");
print_r($arry);
array_pop($arry);
array_shift($arry);
array_unshift($arry,"g");

print_r($arry);

$data = "Apple,Banana,Mango";
$fruits = explode(",", $data);

print_r($fruits);
$arr = array("apple", "banana", "mango");
$str = implode(",", $arr);
echo $str;
echo date("Y-m-d"); // Output: 2025-05-14

?>