<html>	<head>			<style>					body {				background-color: darkred;			}			h1 {				color: white;				text-align: center;				font-size: 40px;			}			h2 {				color: darkgrey;				font-family: verdana;				font-size: 20px;				text-align: center;			}			p {				color: black;				font-family: verdana;				font-size: 40px;				text-align: center;			}</style><h1> Salman Hassan </h1><h2>This is Assignment 1</h2><p>Welcome to the website!</p>    <head>	        <title> The site </title>    </head><?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
        header("Location: index.php");
	
    }
?>
<form method="post" action="logout.php">
   <p> <input type="submit" value="Logout"> </P>
</form> 