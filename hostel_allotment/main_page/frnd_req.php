<?php

session_start();

include "../connect.inc.php";

$id=$_SESSION["id"];
$username=$_SESSION["username"];
$request_to=$_POST["request_to"];

$query="INSERT INTO `requests` VALUES ('','$username','$request_to')";
$query_run=mysql_query($query);


header("location: profile_page.inc.php");

?>