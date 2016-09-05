<?php
//Setup basic functions

function connect_db() {

	$error_message = "<h1>Connection lost!</h1><p>We cannot connect you to the komtluisterttoe servers. <br />Send an email to <a href='mailto:info%40komtluisterttoe.nl'>info@komtluisterttoe.nl</a> when this error appears.</p>";

	require($_SERVER['DOCUMENT_ROOT']."/komtluisterttoe/lib/core/config.php");
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die($error_message);
	} 
	else {
		return $conn;
	}
}
?>