<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>


</style>
    <title>Sign-In</title>
	
	
</head>
<body>


<?php 

$conn=mysqli_connect('localhost','root','','crud');
if (isset($_POST['done']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$query = "select email,password from reg where email='$email' and password ='$password'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

        if($result=mysqli_fetch_assoc($data))
        {
          header ('location: propinsert.php');
            
        }
        else {
           
		echo '<script type="text/javascript">alert("Username or password is wrong!");</script>';
}
        
}
?>				
              <div class="container">
			  <br>
			  <br>
			  <br>
			
			 
			  
			  
               <form style="background-color:#5f95e8;" action="#"  method="Post" > 
              <div class="container ">
						
					<div class="row">
					 <div class="col-sm-4">		
					</div>
					<div class="col-sm-4">	
							<br>
						<div class="logo">
								<a href="#">
								<h1 align="center">
								<img src="image/logo.png" width="200px">
								</h1>
								</a>
						</div>
					</div>
					<div class="col-sm-4">		
					</div>
	
					</div>
						<br>
					  <div class="row">
							  <div class="col-sm-4">
							  </div>
							  <div class="col-sm-4">
								<h1 style="text-align:center;font-family:Arial;color:#0e2b59;"><b>LOGIN HERE</b></h1>
							  
							  </div>
							  <div class="col-sm-4">
							  </div>
					  
					  
					  </div>
					  
					  <br>
					  
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<div class="input-group mb-3">
								<input type="email" style="height:55px;" class="form-control" placeholder="email" name="email" aria-describedby="basic-addon1">
							  </div>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					  </div>
					  <div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<div class="input-group mb-3">
								<input type="password" class="form-control" style="height:55px;" placeholder="Password" name="password" aria-describedby="basic-addon1">
							  </div>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					  </div>
				   
					  <div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
							<button type="submit" name="done" class="btn btn-dark btn-lg btn-block">Login</button>
						  </div>
						  <div class="col-sm-4">
						  </div>
						</div>
					</div>

					<div class="container">
						<div class="row">
						  <div class="col-sm-4">
						  </div>
						  <div class="col-sm-4">
						  <br>
						  <h5 align="center">
							<a href="#">Forgot password?</a>
							<br>
							<br>
							<p class="font-weight-normal">Dont have an account? <a href="http://localhost:8080/finalweb/check.php">Sign up here</a></p>
							</h5>
						  </div>
						  <div class="col-sm-4">
						  <br>
						  </div>
						</div>
					</div>
           
			</form>
 

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>