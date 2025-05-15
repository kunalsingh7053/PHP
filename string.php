<?php
//  1. Creating and Accessing Strings
$str1= "hellow world";
// 🔹 Accessing characters (indexing):
echo $str1[0];
// ✅ 2. Searching and Replacing Strings
$str2 = "PHP is easy!";
echo strpos($str2, "easy"); // Output: 7 (position of "easy")
echo str_replace("easy","funny", $str2);
// ✅ 3. Formatting Strings
echo strtoupper($str2);
echo strtolower($str2);

// ✅ 4. Joining and Splitting Strings
$str3 = "red,green,yellow";
$color = explode(",",$str3);
$str4 = implode(", ",$color);
print_r($color);
print_r($str4)
?>
