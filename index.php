<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: darkred;
}

h1 {
    color: white;
    text-align: center;
     font-size: 40px;
}

p {
	 color: darkgrey;
    	font-family: verdana;
 	 	font-size: 20px;
        text-align: center;
}

m{
align: center;
}


</style>
</head>

<h1> Salman Hassan </h1>
<p>This is Assignment 1</p>



<html>
<head> 
<title> Login </title>
<body>

	<form action ="#" method = "post">
	Username ID 
	<input type = "text" name = "username">
	<br>
	Password 
	<input type = "password" name = "pass">
	
	<br>
	<input type = "submit" value = " Login" name = "submit">
</form>
</body>
</html>


<?php

	if(isset($_POST['submit']))
	{
		$user = $_POST['username'];
		$pass = $_POST['pass'];
		if(($user == "SalmanHassan") && ($pass = "55555")){
			echo "Welcome Salman";
		}
		
		else if(($user == "SultanHassan") && ($pass = "123456")){
			echo "Welcome Sultan";
		}
		
	else {
			echo "invalid username / Password" ;
	}
	}

?>