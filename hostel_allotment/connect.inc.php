<?php

$ip="localhost";
$username="root";
$password="";
$db_name="hostel_allotment";
$table_name="user_data";
	
	if(!@mysql_connect($ip,$username,$password) || !@mysql_select_db($db_name))
	{
		die("Error!Unable to communicate with server.Sorry for the inconvienience");
		
		ob_flush();
	}
?>