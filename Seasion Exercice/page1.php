<?php
//session start
@session_start();
//set session variable
$message = $_SESSION["message"];
echo "Message: ".$message;

//$username =$_SESSION["username"];
   // echo "Username".$username;