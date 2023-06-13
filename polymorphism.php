<?php 

interface jpt{
	public function ppt();
}
class circle implements jpt{
	private $radius;
	public function __construct($radius)
	{
		$this->radius = $radius;
	}
public function ppt()
{
	return pi()* $this ->radius*$this->radius;
}
}
class rectangle implements jpt{
	private $width;
	private $height;
	public function __construct($width, $height)
	{
		$this->width = $width;
		$this->height = $height;
	}
	public function ppt()
	{
		return $this -> width * $this->height;
	}
}
 $mycirc = new Circle(3);
 $myrect = new rectangle(3,4);
 echo $mycirc->ppt();
 echo "<br>";
 echo $myrect->ppt();


 ?>