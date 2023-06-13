<?php 
class student{
public $roll;
public $name;
public $marks;
 function __construct($r,$n,$m)
{
	$this->roll = $r;
	$this->name = $n;
	$this->marks = $m;

}
 function display()
{
	echo "<h2>student details</h2n	echo "student roll no: "$this->roll;
}

}
class teacher extends student{

}

$s = new teacher(10,"Ram",90);
$s->display();

 ?>

