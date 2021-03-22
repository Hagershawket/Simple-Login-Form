<?php
    // Include the file that connect with the sql
	require "sql_connection.php";

    // Get the data from the user
	$UserName        = $_POST["username"];
	$PassWord        = $_POST["password"];
	$ConfirmPassword = $_POST["confirmedpassword"];

    // confirm the password
	if ( $ConfirmPassword == $PassWord )
	 {

		$query    = " INSERT INTO loginform ( User , Pass ) VALUES ('$UserName' , '$PassWord' ) ";
		$statment = $Connection_Object-> prepare($query);
		$statment -> execute();
		header('Location: login_html.php');
				
	 }
	else
	 {
		echo "Invalid confirm password. Please Make sure to write the same password in the Confirm Password box";
	 }



