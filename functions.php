<?php

echo "welcome to php tutorial on functions";
function process($marks){
    $sum=0;
    foreach ($marks as $key) {
        # code...
        $sum=$sum+$key;

    }
    return $sum;

}
$student1=array(9,8,7,9,8,8);
$total1=process($student1);
echo "<br>total marks attained by student1 is ".$total1." out of 60";

?>