<?php
$userName=$userPassword="";

$userName=$_POST["username"];
$userPassword=$_POST["password"];
$confirmPassword=$_POST["confirmPassword"];

$servername = "localhost";
$username = "root";
$pass ="gauri@123";
$dbname = "day4";

// Create connection
$conn = new mysqli($servername, $username,$pass,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($userPassword==$confirmPassword)
{
	$sql="insert into registration values ('$userName','$userPassword')";
	if ($conn->query($sql) === TRUE) 
	{
    	echo "Congratulations!!!";
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
else
{
	echo "Something's wrong :( ";
}


$conn->close();


?>