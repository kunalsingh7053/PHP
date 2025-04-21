<?php
$str1 = "Kunal Patel";
echo strlen($str1);
echo "<br>";
$str2 = "Kunal";
echo strrev($str2);
echo "<br>";

$str3 = "HELLO KUNAL";
echo strtolower($str3);
echo "<br>";

$str4 = "hello kunal";
echo strtoupper($str4);
echo "<br>";

$str5 = "   Hello Kunal   ";
echo trim($str5);
$str6 = "Mango,Apple";
$arr = explode(",",$str6);
foreach($arr as $key)
{
    echo  $key ;
}

?>
