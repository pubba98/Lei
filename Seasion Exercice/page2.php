<?php
//start a session;
//session start
@session_start();
//set session variable
$message = $_SESSION["message"];
echo "Message: ".$message;

//$password=$_SESSION["Password"];
//echo "Password";
