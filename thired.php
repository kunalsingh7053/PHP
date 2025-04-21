<?php
//control statements
//1)conditional statements
//if , if-else, if-elseif-else,switch
$age = 28;
if($age<25)
{
    echo"you are Boy";
}
else if($age<60){
 echo"Your are Men";
}
else if($age>60){
    echo"You are old Men";
}
else{
    echo"You are Baby";
}
//2)looping
$fruites = array('mango','cherry','orange','bannana');

foreach($fruites as $key)
{
    echo"<br> $key <br>";
}
//3)jumping statements
for($i = 0; $i<=100; $i++)
{
    if($i == 5)
    { 
        echo"<br> $i <br>"; 
        break;
    }
    else{
        echo"<br>$i <br>";
    }
}

?>
