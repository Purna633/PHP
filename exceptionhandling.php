<?php 
function divide($n)
{
	try{
		if($n <=0)
		{
			throw new Exception("<br>Enter valid number.");
		}

		$result = 5/$n;
		echo "<br>".$result;
	}
	catch(Exception $e)
	{
		echo $e ->getMessage();
	}
	finally{
		echo "<br> hello";
	}
}
divide(5);
divide(0);

 ?>