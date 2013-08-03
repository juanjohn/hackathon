<?php
session_start();
include "../connect.inc.php";

$username=$_POST["username"];
$password=$_POST["password"];

$query="SELECT `id`,`user_name`, `password` FROM `user_data` WHERE `user_name`='$username' AND `password`='$password' ";
$query_run=mysql_query($query);

$num_rows=mysql_num_rows($query_run);

if($num_rows==1){
	$array=mysql_fetch_assoc($query_run);
	$_SESSION["id"]=$array["id"];
	
	header("location:../main_page/profile_page.inc.php");
	
}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script type="text/javascript" >
	
</script>

</head>

<body>



</body>

</html>