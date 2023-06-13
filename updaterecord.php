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
$update=" UPDATE students SET name = 'hari', address = 'kanchanpur' WHERE roll_no = 1";
$result=$conn->query($update);
//check update
if($result == TRUE)
{
	echo "data updated";
}
else{
	echo "couldn't update".$conn->error;
}

 ?>
