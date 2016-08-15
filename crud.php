<?php 

require "connections.php";

class Crud{

		public function save(){

	
		    $sql = "INSERT INTO users (name, age) VALUES ('".$_POST["name"]."', '".$_POST["age"]."')";

	   	 	echo "New record created successfully";
	   	 	
	    	$connections = new Connections();
	    	$connections->execute($sql);


			$conn = null;
		
		

		}	

}