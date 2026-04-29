<?php
	define("DB_HOST", "db");   // Docker service name
	define("DB_NAME", "bookstore"); // must match docker-compose
	define("DB_USER", "root");
	define("DB_PASS", "root"); // from docker-compose

	try 
	{
		$connection_database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	}
	catch(Exception $error) 
	{
		echo "Database connection failed";
	}
?>
