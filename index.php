<!DOCTYPE HTML><html>	<head>			<style>					body {				background-color: darkred;			}			h1 {				color: white;				text-align: center;				font-size: 40px;			}			h2 {				color: darkgrey;				font-family: verdana;				font-size: 20px;				text-align: center;			}			p {				color: black;				font-family: verdana;				font-size: 20px;				text-align: center;			}</style><h1> Salman Hassan </h1><h2>This is Assignment 1</h2>    <head>	        <title> Login </title>    </head>        <body>                <form method="post" action="index.php">           <p> <label for="username">Username:</label><br/> </p>           <p> <input type="text" name="username" id="username"><br/> </p>           <p>  <label for="password">Password:</label><br/> </p>           <p>  <input type="password" name="password" id="password"><br/> </p>           <p> <input type="submit" value="Log In!"> </p>        </form>    </body></html><?php	$_SESSION['fail'] = 0;	// We start the session from this point.    session_start();    // Add the usernames into an array.    $username = array("SalmanHassan","SultanHassan");	// Add the passwodrds into another array.    $password = array("55555","12345");    // Show the error.    $error = "";	// See wheather the user is logged in or not, and move him to the other page if he logged in.    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {        $error = "approved";				// Attatch it to the approved code.        header('Location: approved.php');    }         	// See wheather the information entered, then log in.    if (isset($_POST['username']) && isset($_POST['password'])) {        if ($_POST['username'] == $username[0] && $_POST['password'] == $password[0]) {            $_SESSION['login'] = true;            header('Location: approved.php');        } 		else if($_POST['username'] == $username[1] && $_POST['password'] == $password[1]) {	            $_SESSION['login'] = true;	            header('Location: approved.php');		}else {            $_SESSION['login'] = false;			$_SESSION['fail'] = $_SESSION['fail'] + 1;            $error = "You have entered incorrect information  ".$_SESSION['fail'];			 			        }    }?>		        <?php		// Show the error.		echo $error; ?>