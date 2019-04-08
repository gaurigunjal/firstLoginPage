<?php
$productName=$productId=$productPrice=$productCategory="";
$productNameErr = $productPriceErr = $productIdErr = $productCategoryErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

  if (empty($_POST["productName"])) 
  {
    $productNameErr = "Name is required";
  } 
  else 
  {
    $productName = test_input($_POST["productName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$productName)) 
    {
      $productNameErr = "Only letters and white space allowed";
    }
  }



  if (empty($_POST["productCategory"])) 
  {
    $productCategoryErr = "Categary is required";
  } 
  else 
  {
    $productCategory = test_input($_POST["productCategory"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$productCategory)) 
    {
      $productCategoryErr = "Only letters and white space allowed";
    }
  }



  if (empty($_POST["productId"])) 
  {
    $productIdErr = "Id is required";
  } 
  else 
  {
    $productId = test_input($_POST["productId"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$productId)) 
    {
      $productIdErr = "Only numbers are allowed";
    }
  }



  if (empty($_POST["productPrice"])) 
  {
    $productPriceErr = "Price is required";
  } 
  else 
  {
    $productPrice = test_input($_POST["productPrice"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9]*$/",$productPrice)) 
    {
      $productPriceErr = "Only numbers are allowed";
    }
  }

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$productName=$_POST["productName"];
$productId=$_POST["productId"];
$productIdInt=intval($productId);
$productPrice=$_POST["productPrice"];
$productPriceInt=intval($productPrice); 
$productCategory=$_POST["productCategory"];


$servername = "localhost";
$username = "root";
$pass ="gauri@123";
$dbname = "day4";

// Create connection
$conn = new mysqli($servername,$username,$pass,$dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}


	$sql="insert into products values ('$productName','$productCategory','$productIdInt','$productPriceInt')";
	if ($conn->query($sql) === TRUE) 
	{
     	header("Location: productList.php");
	} 
	else 
	{
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
/*
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
  		 header("Location: productList.php");
   
	} 
	else
	{
	echo "Something's wrong :( ";
	}

*/

$conn->close();


?>