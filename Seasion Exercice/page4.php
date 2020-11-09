<?php
//start a session

@session_start();
//set session variable
$message = $_SESSION["message"];
echo "Message: ".$message;
