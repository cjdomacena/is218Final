<?php




class User 
{
	private $userName, 
				  $firstName, 
				 $lastName;


	// Setter Functions
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}

	public function setFirstName($firstName)
	{
		$this->firstName = $firstName;
	}

	public function setLastName($lastName)
	{
		$this->lastName = $lastName;
	}

	// Getter Function
	public function getUserName()
	{
		return $this->userName;
	}
	
	public function getFirstName()
	{
		return $this->firstName;
	}

	public function getLastName()
	{
		return $this->lastName;
	}
}
