<?php
echo "Welcome to the world of associative arrays";
$favcol=array('shubham'=> "red",
'rohan' =>'green',
'ridhima'=>'black',
'gaya'=>'hotpink',
8=>"this");
echo "<br>". $favcol['rohan'];
echo "<br>". $favcol[8];
foreach ($favcol as $key => $value) {
    # code...
    echo "<br> favourite color of ".$key." is ".$value;
}
?>