<?php 
class Purna{
 public function purna()
 {
 	echo "I am from Gorkha";
 }
}
class teacher extends purna{
	public function __construct()
	{
		echo "hello, it's me Purna Aale";
		echo "<br>";
	}
	public function __destruct()
	{
		echo "<br>"." I study in southwestern state collage";
	}
}
$obj=new teacher();
$obj->purna();

 ?>