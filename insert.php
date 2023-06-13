<?php 
$server="localhost";
$username="root";
$password="";
$database="first";
$connection=new mysqli($server,$username,$password,$database);
if($connection -> connect_errno!=0)
{
	die("connection failed".$connection->connect_error);
}
$insert="INSERT INTO  students(roll_no,name,address) VALUES (4,'abishek','ilam')";
//executing sql
if($connection->query($insert)) {

	echo "data inserted successfully";
     }
     else{
     	echo "error inserting successfully".$connection->error;
     }
 ?>
 
