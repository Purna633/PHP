<?php 
$name="Purna";
$a=20;
$b=30;
function add()
{
	global $a,$b;
	$sum=$a+$b;
	echo $sum;
}
add();
echo "<br>";
function jpt()
{
	global $a;
	$a++;
	echo $a++;
}
jpt();

 ?>