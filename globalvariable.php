<?php
    $a=4;
    $b=5;
    function sum(){
        global $a,$b;/* if u want to use global variables then you have to write
        global kayword otherwise u need to define it within the block and change in these automatically
        changes global variables */
        $a=4; $b=7;// this changes global value permanantly
        echo ($a+$b)."<br>";
        echo "<br>".var_dump($GLOBALS);
    }
    sum();


?>