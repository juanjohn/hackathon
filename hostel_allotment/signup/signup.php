<?php

include "../connect.inc.php";

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];


$query="INSERT INTO `user_data` VALUES ('','$name','$username','$password','','','','','')";
mysql_query($query);


header("location:../homepage.php");

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