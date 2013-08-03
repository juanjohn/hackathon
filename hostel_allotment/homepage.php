<?php

include "connect.inc.php";



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script type="text/javascript" >
	
</script>

</head>

<body>

<form method="post" action="signin/signin.php" >
<p>Enter your username:</p>
<input type="text" id="username" name="username"/>

<p>Enter your password:</p>
<input type="password" id="password" name="password"/>
<input type="submit"  value="signin"/>

</form>


<hr/>
<form method="post" action="signup/signup.php" id="signup">
<p>Enter your name:</p>
<input type="text" id="name" name="name"/>


<p>Enter your username:</p>
<input type="text" id="username" name="username"/>

<p>Enter your password:</p>
<input type="password" id="password" name="password"/>
<input type="submit" value="Register" />
</form>

</body>

</html>