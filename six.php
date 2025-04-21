<?php
// $str = "Hello";
// echo $str; // Output: e
// $text = "Hello Kunal";
// echo str_replace("Kunal", "Patel", $text); // Hello Patel
// $arr = ["apple", "banana"];
// echo implode(", ", $arr); // apple, banana
$str = "apple,banana";
$newArr = explode(",", $str);
foreach ($newArr as $arr) {
    echo $arr . "<br>";
}

?>