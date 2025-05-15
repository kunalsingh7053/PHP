<?php
 $arr = $_POST['marks'];
 $total = 0;
  foreach($arr as $mark)
 {
   $total +=  $mark; 
 }
 $percentage  = $total / 500 * 100;
if($percentage>=60)
{
    echo "I-Division";
} 
else if($percentage<60 && $percentage>=50)
{
    echo "II-Division";
}
else{
    echo "Fail";
}

?>