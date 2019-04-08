<?php 
//$email=$password="";

$userName=$_POST["username"];

$userPassword=$_POST["pass"];


$servername = "localhost";
$username = "root";
$password ="gauri@123";
$dbname = "day4";

$conn = new mysqli($servername, $username,$password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="select * from registration where username='$userName' and pass='$userPassword'";
$result = $conn->query($sql);
if($result->num_rows > 0){
  		 header("Location: productList.php");
   
} 
else{
	echo "something went wrong";
}
$conn->close();
?>