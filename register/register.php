<?php

require_once "../db.php";


// Get the input from the user.
$fName = filter_input(INPUT_GET, 'fName');
$lName = filter_input(INPUT_GET, 'lName');
$email = filter_input(INPUT_GET, 'email');
$password = filter_input(INPUT_GET, 'password');

// Instanciate new connection
$connection = new Connection;

// Query into the user
$query = "insert into user (email, firstName, lastName, password) values 
('$email', '$fName', '$lName', '$password')";

// Run the Query to add it to the database
$connection->runQuery($query, $connection->connection());


?>