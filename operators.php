<?php
//Arithmetic
$a  = 10;
$b = -1;
echo "Addition".($a + $b )."\n";
//logical
if($a>0 && $b > 0)
{
    echo "Both are greater than zero.\n";
}
else{
    echo "At least one of the variables is not greater than zero.";
}
//comparision
if($a > $b){
    echo "First variable is greater than second variable\n";
}
//assignment
$c = 5;
$c *=10; 
echo $c."\n";

?>