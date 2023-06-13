<?php 
$server="localhost";
$username="root";
$password="";
$db="first_db";
$conn=new mysqli($server,$username,$password,$db);
if($conn -> connect_errno!=0)
{
	die("connection failed".$conn->connect_error);
}
$delete=" DELETE FROM students WHERE roll_no = 2";
if($conn->query($delete))
{
	echo "record delete successfully";
}
else{
	echo "couldn't delete".$conn->error;
}

 ?>
