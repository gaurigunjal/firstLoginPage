<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
  		
  .makecenter
  {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .loginWindow{
  	padding: 40px;
    width: 600px;
    height:300px;
    border: 3px dotted black;
    background: pink;
  }
  .pad{
    padding: 10px;
    font-family: sans-serif;
    font-size: 20px;
    color: ghostwhite;
  }


</style>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body style="background-image: url(wall.jpg);">

    <form method="post" action="login_validations.php">

      <div style="margin-top: 160px">

      <div class="row">


      <div class="col-sm-3"></div>

      <!--login form -->
      
              <div class="col-sm-6">
              
                <h1><b style="color: ghostwhite">Login page</b></h1>
               
                <table>
                  <tr>
                    <td class="pad">Name</td>
                    <td class="pad" style="color: black"><input type="text"  placeholder="First Name" name="username" required></td>
                  </tr>
                  <tr>
                    <td class="pad">Password</td>
                    <td class="pad" style="color: black"><input type="password"  placeholder="Password" name="pass" required></td>
                  </tr>
                  <tr>
                    <td class="makecenter"><button type="submit" class="btn btn-primary">Login</button></td>
                    <td><button  class="btn btn-light"><a href="loginPage.php">Cancel</a> </button></td>
                  </tr>
                </table>


        </div>
        <div class="col-sm-3"></div>

<!--
      <table>
        <tr>
          <td class="pad">User Name</td>
          <td class="pad"><input type="text" class="form-control-md" placeholder="Enter your name" name="username"></td>
          </tr>
          <tr>
          <td class="pad">Password</td>
          <td class="pad"><input type="password" class="form-control-md"  placeholder="Enter the password" name="pass">
          </tr>
          <tr>
          <td ></td>
          <td class="pad"><input type="submit" class="btn btn-primary"></td>
        </tr>
      </table>

     
     <a href="register.php">Create an Account</a>
-->
     </div>
    </div>


  </form>	
  
  
  </body>
</html>

