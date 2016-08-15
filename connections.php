<?php 
	

class Connections{

	public function execute($sql){

		$servername = "localhost";
		$username = "ralphy";
		$password = "12345";
		$dbname = "tutorial";

		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
		$conn->exec($sql);
	}
}
