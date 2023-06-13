<?php 
//function with parameter without return type
function add($a,$b)
{
$sum=$a+$b;
echo $sum;
} 
add(2,3);
echo "<br>";
//function with parameter and return type
function mul($c,$d)
		{
			return $c*$d;
		}
		$multiplication=mul(90,32)	;
		echo $multiplication;
        echo "<br>";

//function without parameter and without return type
 function perimeter()
		{
			$l=30;
			$b=49;
			return 2*($l*$b);
		}
		$perm=perimeter();
		echo $perm;	
		 echo "<br>";
		//function wihout parameter and return type..
		function purna()
		{
			$p=30;
			$q=30;
			$r=$p+$q;
			echo $r;

		} 
		purna();	
?>