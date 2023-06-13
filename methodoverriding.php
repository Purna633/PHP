<?php 
 class student{
 	public $name="Ram"; 	
 	public function show()
 	{
 		// $this->name=$name;

 		echo $this->name;
}	
}
class teacher extends student{
  	public $name="Purna Aale";
	function show()
	{
 		// $this->name=$name;
		echo $this->name;
	}
}


//$obj = new student();
//$obj->show()."<br>";
$obj=new teacher();
$obj->show()."<br>";

 ?>
