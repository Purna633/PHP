<?php 
$server="localhost";
$username="root";
$password="";
$db="first_db";
$conn=new mysqli($server,$username,$password,$db);
if($conn -> connect_errno!=0)

	die("connection failed".$conn->connect_error);
$select="SELECT * FROM students WHERE roll_no=2";
$result=$conn->query($select);
if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	echo $row["roll_no"].$row["name"];
}
 ?>
 
