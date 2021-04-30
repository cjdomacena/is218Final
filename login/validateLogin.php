<?php
	require_once "../db.php";


	//Function to check if both credentials entered exists.
	function validateLogin($email, $password)
	{

		$connection = new Connection;
		$query = "select email,password from user where email = '$email' and password = '$password'";
		$result = $connection->runQuery($query, $connection->connection());
		return $result;
	}


	// Get the input from the user.
	$email = filter_input(INPUT_GET, 'email');
	$password = filter_input(INPUT_GET, 'password');


	// Check if record exists
	if(!empty(validateLogin($email, $password)))
	{
		echo "Login Successful!";
	}
	else 
	{
		echo "Record not found!";
	}
	

?>