<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="phptrips";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        die("Sorry we failed to connect". mysqli_connect_error());
    }
   /*  $sql= "CREATE DATABASE testdata";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "query successfully";
    }
    else{
        echo mysqli_error($conn);
    } */


    
   /*  $sql= "CREATE TABLE `trip` ( `sno` INT(5) NOT NULL AUTO_INCREMENT , `name` VARCHAR(25) NOT NULL , `place` VARCHAR(25) NOT NULL , `time` DATETIME NOT NULL , PRIMARY KEY (`sno`))";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "database-table created";
    }else {
        # code...
        echo mysqli_error($conn);
    } */
   /*  $sql="INSERT INTO `trip` (`sno`, `name`, `place`, `time`) VALUES (NULL, 'ADITYA', 'punjab', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "row inserted";
    }
    else {
        
      echo  "could not insert data due to". mysqli_error($conn);
    } */
    
?>