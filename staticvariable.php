<?php 
function sum()
{

	STATIC $a=2;
	$a++;
	echo $a;
}
sum();
sum();
 ?>
