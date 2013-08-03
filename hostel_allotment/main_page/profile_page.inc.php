<?php
session_start();

include "../connect.inc.php";
$id=$_SESSION["id"];

$query="SELECT `id`,`user_name`, `password`,`req_sent` FROM `user_data` WHERE `id`='$id' ";
$query_run=mysql_query($query);

$array=mysql_fetch_assoc($query_run);

$username=$array["user_name"];
$_SESSION["username"]=$username;
$req_sent=$array["req_sent"];

$query="SELECT `id`,`from`, `to` FROM `requests` WHERE `to`='$username' ";
$query_run=mysql_query($query);

while($requests=mysql_fetch_assoc($query_run)){
	
	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script type="text/javascript" >
	
</script>
<script type="text/javascript" src="profile.js">
</script>
<script type="text/javascript" src="scripts.js">		
</script>
<link rel="stylesheet" type="text/css" href="main.css" />
<link rel="stylesheet" type="text/css" href="profile.css" />
<link rel="stylesheet" type="text/css" href="footer.css" />
</head>
<body>

		<header id="header_main">
        
        <?php
		echo $username;
		?>
        </header>
        <nav id="navigation">
            <ul>
            <a rel="Home" href=""><li class="home"><p></p></li></a>
            </ul>
            
        </nav>
    <div id="big_wrapper">
        
        
        
        <section>
        <?php
		for($j=0;$j<=8;$j++){
			for($i=1;$i<=10;$i++){
				echo "<div id='$i' class='room'> Room no: ".($j*10+$i);
				echo "<br/><input type='button' onclick='save()' value='Book'/>";
				echo "<br/>";
				echo "<br/>";
				
				echo "<br/>";
				echo "</div>";
			}
			
			echo "<br/>";
		}
		?>
        
        
        
        </section>
        <aside id="aside_left" style="text-align:left;">
        
        <div><p>Pending Requests:-</p></div><br/>
        
        <form method="post" action="accept_req.php">
        <div >
        <ul id="requests">
        
        </ul>
        </div>
        <input type="submit" value="Accept Request"/>        
        </form>
        
        <div><p>Sent Request:-</p></div><br/>
        <form method="post" action="frnd_req.php">
        <input type="text" id="request_to" name="request_to" placeholder="Username "/>
        <input type="submit" value="Sent Request"/>        
        </form>
        
        </div>
        
        
        </aside>

        
        <footer id="footer">
        	
        </footer>
    </div>
</body>
</html>














