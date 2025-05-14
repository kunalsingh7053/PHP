<?php
//if-else
$marks = 100;
if($marks>45)
{
    echo "pass";
}
else{
    echo"fail";
}
//switch case + break(jumping statment)
$rating = 5;
switch($rating)
{
    case 1:
    echo "you give one star";
    break;
    case 2:
        echo "you give two stars";
        break;
        case 3:
            echo" you give three stars";
            break;
            case 4:
                echo "you give four stars";
                break;
                case 5:
                    echo"you give five stars";
                    break;
                    default:
                    echo"invalid rating";

}
//for-loops
$name = "kunal";
$revers = "";
for($i=strlen($name)-1;$i>=0;$i--)
{
    $revers .= $name[$i];
}
echo "<br>".$revers;
//while-loop

$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}

//do-while loop

$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 5);
//for-each loop
$colors = array("red","greeen","yellow","blue");
foreach($colors as $color)
{
    echo "<br>".$color."<br>";
}
$person = ["Name"=>"kunal","age"=>20,"city"=>"Mandleshwar"];
foreach($person as $key => $value)
{
    echo "<br>".$key.":".$value.".<br>";
}

//break 
for($i=0;$i<=10;$i++)
{
    if($i==3)
    {
        break;
    }
    echo "<br>".$i."<br>";
}
for($i=0;$i<=10;$i++)
{
    if($i==3)
    {
        continue;
    }
    echo "<br>".$i."<br>";
}
//exit statment
$age = -5;
if($age<0)
{
    exit("Invalid age");
}
?>