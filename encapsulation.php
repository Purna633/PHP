<?php  
class User
{

	private $id;
	private $name;
	private $email;
	//setter methods
	public function setId($id, $name, $email)
	{
    $this-> id= $id;
    $this-> name= $name;
    $this-> email= $email;

	}
	
	//getter methods
	public function getId()
	{
		return $this->id."<br>". $this->name."<br>". $this->email;
		
		}
	}
$user=new User();
$user->setId(5, "purna","purna@gmail.com");
echo $user->getId()."<br>";
 ?>