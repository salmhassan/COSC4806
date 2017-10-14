<!DOCTYPE HTML>
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

			h2 {
				color: darkgrey;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
			}

			p {
				color: black;
				font-family: verdana;
				font-size: 20px;
				text-align: center;
			}

</style>

<h1> Salman Hassan </h1>
<h2>This is Assignment 1</h2>

    <head>
	
        <title> Registration </title>

    </head>

    <body>
	 <p> <form action="registration.php" method="POST"><br> </p>
	 	 <p> Email: <input type="text" name="email"/></br> </p>
		 <p> Username: <input type="username" name="username"/></br> </p>
		 <p> Password: <input type="password" name="password"/></br></br> </p>
        </form>
		 <p> <form method="post" action="registration.php"> <br> </p>
		 <p> <input type="submit" name= "register" value="Registr"/> </p>
		</form>
        </form>
    </body>
</html>

<?php

try {
   $conn = new PDO('mysql:127.0.0.1;=$servername;dbname=cosc', 'root', '');
   if(isset($_POST['register'])){
     $email=$_POST['email'];
	$username=$_POST['username'];
   $password=$_POST['password'];
   $hash=password_hash($password,PASSWORD_DEFAULT);
   $insert=$conn->prepare("INSERT INTO users(username, password, email)
									  values(:username,:password,:email)");
   $insert->bindParam('email',$email);
   $insert->bindParam('username',$username);
   $insert->bindParam('password',$password);
   $insert->execute();
   header("location:index.php");

   }

   }
catch(PDOException $e)
   {
   echo $sql . "<br>" . $e->getMessage();
   }
   $conn = null;
?>
			

