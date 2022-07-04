<?php

$connection  = mysqli_connect("localhost", "root", "", "chandstore");

if($connection)
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
    	
	if(mysqli_query($connection, "insert into user values('$fname', '$lname', '$phone','$address','$email','$pass');"))
	{
		header('Location:  /chandstore/login.php');
	}
	else
		echo "error while inserting your record into database";
}
else
	echo "Not connected";

?>