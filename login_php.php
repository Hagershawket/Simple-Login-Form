<?php
    
    // Include the file that connect with the sql
	require "sql_connection.php";

    // Get the data from the user
	$UserName = $_POST["username"];
	$PassWord = $_POST["password"];
	
	// check if the user enter his data or not
	if( $UserName == "" || $PassWord == "")
	   {
			echo " Please Enter Your Information to login ";
	   }
	else
	   {
	   	    $query    = " SELECT * FROM loginform WHERE User ='$UserName' AND Pass ='$PassWord' ";
			$statment = $Connection_Object-> prepare($query);
			$statment ->execute();
			$count    = $statment-> rowCount();
			if ($count >  0)
			{
				echo " Login Success " . $UserName;
			}
			else
			{
				echo " Wrong username Or password. Please Try again. ";
			}
	   	 
	   }


