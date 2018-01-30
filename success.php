<?php
	session_start();
	if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false)
	{
		<script>alert("I am an alert box!");</script>
		header("Location: index.php");
      	 
	}
?>

 <h2>Logged IN!</h2>
 <div><a href="logout.php">Logout</a></div>





