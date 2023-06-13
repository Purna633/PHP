<?php 
$server="localhost";
$username="root";
$password="";
$database="first_db";
$connection=new mysqli($server,$username,$password,$database);
if($connection -> connect_errno!=0)

	die("connection failed".$connection->connect_error);
$insert="INSERT INTO  students(roll_no,name,address) VALUES (4,'abishek','ilam')";
//fetch from table
$select="SELECT * FROM students";
$data=$connection->query($select);
if($data->num_rows>0)
{
	//initilize empty array to store data.
	// $data_arr[];
    // fetch data from table as associative array.
while($row=$data->fetch_assoc())
{
 echo "The roll number is: ".$row['roll_no']."<br>";
 echo "The name is: ".$row['name']."<br>";
 echo "The address is: ".$row['address']."<br>";
}
}
echo "<pre>";
// print_r($data_arr);
 ?>
 
