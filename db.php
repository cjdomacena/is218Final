<?php
class Connection
{

	// Connection properties
	private $hostname;
	private $username;
	private $password;
	private $dbname;
	public $conn = NULL;


	public function connection()
	{
		$this->hostname = "localhost";
		$this->username = "root";
		$this->password="";
		$this->dbname="users";
		
		// Connect to database
		try{
			$this->conn = 
			new PDO(
				"mysql:host=$this->hostname; 
				 dbname=$this->dbname;", 
				 $this->username, $this->password);
		}catch(PDOException $e)
		{
			header("Content-type: text/plain");
			echo "Connection Failed". $e->getMessage();
		}

		return $this->conn;
	}
	

	public function runQuery($query, $conn) {
	
			$q = $conn->prepare($query);
			$q->execute();
			$results = $q->fetchAll();
			$q->closeCursor();
			return $results;	
	}



}

?>
