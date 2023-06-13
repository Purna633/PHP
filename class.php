<?php 
class student{
	var $a="hello, good morning";
	function display()
	{
		echo $this->a;
	}

}
$obj=new student();
$obj->display();
 ?>
