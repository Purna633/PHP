<?php 
$server="localhost";
$username="root";
$password="";
$db_name="first_db";
$connection=new mysqli($server,$username,$password,$db_name);
if($connection -> connect_errno!=0)
{
	die("connection failed".$connection->connect_error);
}
$create_table="CREATE TABLE  students(roll_no INT(100) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
address VARCHAR(20) NOT NULL)";
//checking creation of database
if($connection-> query($create_table)) {

	echo "table created successfully";
     }
     else{
     	echo "cannot create table".$connection->error;
     }
 ?>
 
