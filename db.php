<?php 
$server="localhost";
$username="root";
$password="";
$connection=new mysqli($server,$username,$password);
if($connection -> connect_errno!=0)
{
	die("connection failed".$connection->connect_error);
}
$create_db="CREATE DATABASE first_db";
//checking creation of database
if($connection-> query($create_db)) {

	echo "database cretaed";
     }
     else{
     	echo "cannot create database".$connection->error;
     }
 ?>
 
