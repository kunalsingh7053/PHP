<?php
$y = 100;//global variable
function test()
{
    global $y;
    echo $y;
    $x = 10;//local
    echo $x;
}
test();
echo $x;
function countcall()
{
    static $count = 0;
    $count++;
    echo $count . "<br>";
}
countcall();   
countcall();   
countcall();   
countcall();   
countcall();   
countcall();   

?>