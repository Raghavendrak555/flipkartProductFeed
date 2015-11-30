<?php


function createConnection() {

      
      
    $servername = "localhost";
    $username = "root";
    $password = "pass123";
    $dbname = "flipkart";


	
	try{
                // Create connection
   	        $conn = new mysqli($servername, $username, $password, $dbname);
		return $conn;
		
	}
	catch(Exception $e)
	{
echo "data base connection is not working";
        die();
	}
}

?>