<?php
$mul_array=array(array(2,3,4,5),array(5,6,7,8),array(9,10,11,12),
array(13,14,15,16));
echo "element at 0,3 is ". $mul_array[0][3]."<br>";
for ($i=0; $i <count($mul_array) ; $i++) { 
    for ($j=0; $j <count($mul_array[$i]) ; $j++) { 
        # code...
        echo $mul_array[$i][$j]." ***** ";
    }
    echo "<br>";
    # code...
}
?>