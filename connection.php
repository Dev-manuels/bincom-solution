<?php
//Session security
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);

$con=new mysqli('localhost','root','','bincom');

if(!$con){
  die(mysqli_error($con));
}


?>