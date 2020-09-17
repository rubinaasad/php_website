<?php 
session_start(); 
unset($_SESSION["user_name"]);
unset($_SESSION["user_pass"]);
$url = "welcome.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("location:Login.php");


session_destroy();
?>