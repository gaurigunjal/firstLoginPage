<!DOCTYPE html>
<html lang="en">
  <head>
  	<style>


  	.makecenter
  	{
		display: flex;
		justify-content: center;
		align-items: center;
	}
    .pad
    {
    	padding: 10px;
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

  <div class="container">
    
    	
        <div class="row" style="margin-top: 170px">

           <div class="col-sm-3"></div>


           <!--Registration form-->

              <div class="col-sm-6">
            	<form  action="register_here.php" method="post">

                <h1><b style="color: ghostwhite">Registration page</b></h1>
               
                <table>
                	<tr>
                		<td class="pad">Name</td>
                		<td class="pad" style="color: black"><input type="text"  placeholder="First Name" name="username" required=""></td>
                	</tr>
                	<tr>
                		<td class="pad">Password</td>
                		<td class="pad" style="color: black"><input type="password"  placeholder="Password" name="password" required=""></td>
                	</tr>
                	<tr>
                		<td class="pad">Confirm Password</td>
                		<td class="pad" style="color: black"><input type="password"  placeholder="Password" name="confirmPassword" required=""></td>
                	</tr>
                	<tr>
                		<td class="makecenter"><button type="submit" class="btn btn-primary">Register</button></td>
                		<td><button  class="btn btn-light"><a href="registerPage.php">Cancel</a> </button></td>
                	</tr>
                </table>

                   
           
            </form>


        </div>
        <div class="col-sm-3"></div>

      </div>
      

    </div>
  </div>
  </body>
</html>
