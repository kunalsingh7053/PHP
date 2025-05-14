<?php
$integer = 10;
echo $integer . "<br>"; // 10<br>
$floatdouble = 2.2;
echo  $floatdouble . "<br>";
$name = "jhon";
echo $name . "<br>";
$Boolean = true;
echo  $Boolean . "<br>";
$fruits = ["mango","apple","bannana"];
echo $fruits[1];//output : mango;
for($i=0;$i<count($fruits);$i++)
{
    echo $fruits[$i] . "<br>";
}
class Car{
    public $price = 50000000;
    function model(){
        echo "Toyota";
    }
}
$c = new Car();
$c->model(); 
echo $c->price;


$Null = NULL;
echo $Null."<br>";

$person = array("Name"=>"kunal","age"=>30,"city"=>"new york");
echo $person["Name"];
$matrix = array(
    array(1,2,3),
    array(4,5,6),
);
$row = count($matrix);
$col = count($matrix[0]);
echo "<br>";
for($i=0;$i<$row;$i++)
{
    for($j=0;$j<$col;$j++)
    {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}

?>