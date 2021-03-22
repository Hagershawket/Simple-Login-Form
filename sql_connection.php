<?php
	$dsn  ='mysql:host=localhost:3307;dbname=system';
	$user ='root';
	$pass ='';
	$options = array
	  ( 
			//This line to accept the arabic words
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	  );
	// check if the connection parameters is correct
	try
	 {
		  $Connection_Object  = new PDO($dsn , $user , $pass , $options);
		
	 }
	catch(PDOException $e)
	 {
		echo ' Failed To Connect ' . '<br>' . $e->getMessage();
	 }

