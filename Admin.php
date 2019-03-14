<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	
	
$conn->close();

if ( isset($_POST['DeleteBT']) )   {
	
    //change every letter to a different colour
	echo "this will delete the user.";
  } else   {
    //nothing to do here, just nice to have a comment letting you know
  }


?>
