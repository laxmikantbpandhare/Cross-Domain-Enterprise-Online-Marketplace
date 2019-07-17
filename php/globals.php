<?php
	/* Marketplace DB:*/

	function open_db_conn() {
		$host = "localhost";
        $username = "id9536829_rajeshmarketplace";
        $password = "rajeshmarketplace";
        $db = "id9536829_rajeshmarketplace";
    
        $conn =  mysqli_connect($host, $username, $password, $db)or die("Cannot connect to databse");
		

		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    		return NULL;
		} 
		return $conn;
	}

	function close_db_conn($conn){
		// Close MySQL connection
		mysqli_close($conn);
	}

?>