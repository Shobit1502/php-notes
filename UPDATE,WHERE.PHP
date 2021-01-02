<?php
$servername="localhost";
$username="root";
$password="";
$database="phptrips";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}
$sql="SELECT * FROM `trip` WHERE `trip`.`place` = 'jalandhar'";
   $result=mysqli_query($conn,$sql);
  // find no. of rows returned
  $num=mysqli_num_rows($result);
  echo $num."<br>";
  $no=1;
  while($row=mysqli_fetch_assoc($result)){
    echo $no."<br>".var_dump($row)."<br>".$row['name']."<br>";
    $no=$no+1;
}

$sql1="UPDATE `trip` SET `place` = 'lucknow' WHERE `trip`.`place` = 'jalandhar'";
$result1=mysqli_query($conn,$sql1);
if($result1){
    $aff=mysqli_affected_rows($conn);
    echo "<br> No. of affected rows ".$aff;
}
/* Similarly u can update and delete */

?>