<?php
echo "Welcome to world of Dates<br>";
date_default_timezone_set('Asia/Kolkata');
$d=date("l");
$e=date("dS D l F Y");
$f=date("j l y");
$g=date("l");
$h=date("l h");
$i=date("g:i:s");
$j=date("l");
echo "Date is ".$d."<br>"; 
echo "Date is ".$e."<br>"; 
echo "Date is ".$f."<br>"; 
echo "Date is ".$g."<br>"; 
echo "Date is ".$h."<br>"; 
echo "Time is ".$i."<br>"; 
echo "Day is ".$j."<br>"; 

?>