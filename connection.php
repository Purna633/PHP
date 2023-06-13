<?php 
$server="localhost";
$username="root";
$password="";
$connection=new mysqli($server,$username,$password);
if($connection -> connect_errno!=0)
{
	die("connection failed".$connection->connect_error);
}
else {

	echo "connection successful";
     }
 ?>
 
