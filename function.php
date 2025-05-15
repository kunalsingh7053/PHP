<?php
function sum($a,$b)
{
   $sum = $a+$b;
   return $sum;
}
echo "The Sum is " . sum(10,20)."<br>";
//call by refrence
function counts(&$y)
{
    $y = 10;
    
}
$x = 1;
counts($x);
echo $x;
//default arguments
function functionname($name = "guest")
{
    echo "Hello " . $name ."<br>";
}
functionname("kunal");
functionname();

?>