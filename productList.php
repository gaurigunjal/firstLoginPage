<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<style type="text/css">

	.error {color: #FF0000;}

		
.makecenter
{
	display: flex;
	justify-content: center;
	align-items: center;
}

table
{
	width: 100%;
}

td,th
{
	border: 2px solid black;
	font-size: 20px;
	font-family: verdana;
  color: ghostwhite;
}
th
{
  background-color: black;
}
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image: url(wall1.jpg);">



<?php
// define variables and set to empty values
$productNameErr = $productPriceErr = $productIdErr = $productCategoryErr = "";
$productName = $productPrice = $productId = $productCategory = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

/* Product name validation */
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


/* Product category validation */
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


/* Product id validation */
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


/* Product price validation */
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
?>

<div class="container">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      


<h2 class="makecenter" style="margin-top: 70px; color: ghostwhite">Welcome to Gg-mall</h2>

<form  method="post" action="product_dbaseConnection.php"> 

<table class="makecenter">

  <tr>
    <td style="padding: 10px;">
      Product Name 
    </td>
    <td  style="padding: 10px; color: black">
      <input required="" type="text" name="productName" value="<?php echo $productName;?>" >
        <span class="error" >* <?php echo $productNameErr;?></span>
    </td>
  </tr>

  <tr>
    <td  style="padding: 10px">
      Product Category
    </td>
    <td  style="padding: 10px">
      <input type="radio" name="productCategory" value="shampoo">Shampoo
        <input type="radio" name="productCategory" value="soap">Soap
        <input type="radio" name="productCategory" value="talcPowder">Talc Powder

        <span class="error">* <?php echo $productCategoryErr;?></span>
    </td>
  </tr>

  <tr>
    <td  style="padding: 10px">
      Product Id
    </td>
    <td  style="padding: 10px;color: black">
      <input required="" type="text" name="productId" value="<?php echo $productId;?>">
        <span class="error">* <?php echo $productIdErr;?></span>
    </td>
  </tr>

  <tr>
    <td  style="padding: 10px">
      Product Price 
    </td>
    <td  style="padding: 10px;color: black">
      <input required="" type="text" name="productPrice" value="<?php echo $productPrice;?>">
        <span class="error">* <?php echo $productPriceErr;?></span>
    </td>
  </tr>

  <tr>
    <td   colspan="2" style="padding: 10px ;padding-left: 250px" >
      <input type="submit" class="btn btn-info btn-lg" name="submit" value="Submit">
    </td>
  </tr>

</table> 
</form>



<!--
<table class="makecenter" style="margin-top: 30px">
  <tr>
    <td  style="padding: 20px">
      <?php echo $productName;?>
    </td>
    <td  style="padding: 20px">
      <?php echo $productCategory; ?>
    </td> 
    <td  style="padding: 20px">
      <?php echo $productId; ?>
    </td>
    <td  style="padding: 20px">
      <?php echo $productPrice; ?>
    </td>
  </tr>

</table>

-->
    </div>
    <div class="col-sm-1"></div>
  </div>
</div>


<div class="container">
  <?php


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
$sql = "select * from products";
$result = $conn->query($sql);

/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>

      <table class="makecenter" style="margin-top: 30px">
  <tr>
    <td  style="padding: 20px">
      <?php echo $productName;?>
    </td>
    <td  style="padding: 20px">
      <?php echo $productCategory; ?>
    </td> 
    <td  style="padding: 20px">
      <?php echo $productId; ?>
    </td>
    <td  style="padding: 20px">
      <?php echo $productPrice; ?>
    </td>
  </tr>

</table> 



       <h1> <?php echo " - No: " . $row["no"]." - Name: " . $row["user_name"]. " -password    " . $row["user_pass"]. "<br>"; ?><h1>
        <?php
    }
} else {
  ?>
<h1><?php
    echo "0 results"; ?></h1><?php 
}
$conn->close();
?>

</div>

*/


if($result->num_rows > 0) {
   // output data of each row
   ?>
   <table style="width:100%;">
 <tr>
   <th>Product ID</th>
   <th>Product Name</th>
   <th>Price</th>
   <th>Categary</th>
 </tr>    
 <?php
   while($row = $result->fetch_assoc()){
 ?>
       
 <tr>
   <td><?php echo $row["productId"] ?></td>
   <td><?php echo $row["productName"] ?></td>
   <td><?php echo $row["productPrice"] ?></td>
   <td><?php echo $row["productCategory"] ?></td>
 </tr>    
          
  <?php
   } 
   ?>
   </table>
   <?php

  } 
  else 
  {
    ?>

<h4>
<?php
   echo "please enter something"; ?></h4><?php
}
$conn->close();
?>
</div>

</body>
</html>