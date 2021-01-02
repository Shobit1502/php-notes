<?php
/* session are used to store secure data whereas
cookies for normal data like preferencies , categories */

// syntax to set a cookie
setcookie("category","books",time()+86400,"/");// this cookie will expire in 86400 seconds and / is for using this cookie in entire website
echo "The cookie is set <br>";



// syntax of session
session_start();
$_SESSION['username']="shobit";
$_SESSION['password']="raju";

?>