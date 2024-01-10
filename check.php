<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>

.error {color: #FF0000;}


</style>


 

<script type="text/javascript">
	
function validateRegistration(letters){
    var regex = /^[a-zA-Z]+$/;
    if(regex.test(letters.username.value) == false){
     alert("First Name must be in alphabets only");
     
              
     letters.username.focus();
     return false;
    }
    else if(letters.username.value == " "){
      alert("First Name Field cannot be left empty");
      letters.username.focus();
      return false;
    }

    var emailregex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;

    if(emailregex.test(letters.email.value) == false){
      alert("This is not a valid email address");
      return false;
    }
    
    return true;
  }



</script>




    <title>Sign-Up</title>
</head>



<body>


<?php


include 'conn.php';

if (isset($_POST['done']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];


$q= "INSERT INTO `reg` (`username`, `email`, `password`) VALUES ('$username','$email','$password') ";

$query=mysqli_query($con,$q);

}





?>

 


					
              <div class="container">
			  <br>
				<br>
				<br>
			
			  
			  
               <form  name="regform" method="post" onsubmit="return validateRegistration(this)" style="background-color:#5f95e8;">
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
								<h1 style="text-align:center;font-family:Arial;color:#0e2b59;"><b>SIGN UP HERE</b></h1>
							  
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
							<tr>
								<td>
								<input  type="text" style="height:55px;" class="form-control" placeholder="Username" name="username" id="username">
								</td>
							</tr>
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
							<tr>
								<td>
								<input type="email" class="form-control" style="height:55px;" placeholder="Email" name="email" id="email"> 
								</td>
								
								
								</tr>
								<br>	
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
								<input type="password" class="form-control" style="height:55px;" placeholder="Password" name="password"  id="password ">
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
							<button type="submit" class="btn btn-dark btn-lg btn-block" name="done" id="submit" >SUBMIT</button><br>
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