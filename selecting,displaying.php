<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="phptrips";
 $conn = mysqli_connect($servername,$username,$password,$database);
 if(!$conn){
     die("Sorry we failed to connect". mysqli_connect_error());
 }
 $sql="SELECT * FROM `trip`";
    $result=mysqli_query($conn,$sql);
   // find no. of rows returned
   $num=mysqli_num_rows($result);
   echo $num."<br>";

   // display row returned
  /* for 1 row
  
  if($num>0){
       $row=mysqli_fetch_assoc($result);
       echo var_dump($row);
   } */

   // for all fetched rows
   while($row=mysqli_fetch_assoc($result)){
       echo "<br>".var_dump($row)."<br>".$row['name']."<br>";
   }
?>