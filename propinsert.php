<?php
include 'conn.php';

if (isset($_POST['done']))
{
$username=$_POST['username'];
$prop=$_POST['prop'];
$rooms=$_POST['rooms'];
$address=$_POST['address'];
$cond=$_POST['cond'];
$q= "INSERT INTO `proper` (`username`, `prop`, `rooms`, `address`, `cond`) VALUES ('$username', '$prop', '$rooms', '$address','$cond') ";

$query=mysqli_query($con,$q);

}






?>






<html>
<head>
<title>  PROPERTY INSERT </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script>
	function validateRegistration(letters)
	{
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
	return true;
}
	
	
	
	
	</script>



</head>
<body>
		
	<div class="col-lg-6 m-auto">

		<form action="#" method="post" onsubmit="return validateRegistration(this)">
	
	
	<br><br><div class="card">
				
				<div class="card-header bg-dark">
					<h1 class="text-white text-center"> PROPERTY FORM</h1>
				</div>
				
				<label><br> Name: </label>
				<input type="text" name="username" placeholder="  Username" class="form-control">
				<label><br> Location of property: </label><br>
				<input type="type" name="prop" placeholder="  Enter location" class="form-control"><br>
				<label><br> No of rooms: </label><br>
				<input type="text" name="rooms" placeholder="  Enter number of rooms" class="form-control"><br>
				<label><br> Address: </label><br>
				<input type="text" name="address" placeholder="  Enter address" class="form-control"><br>
				<label><br> Condition: </label><br>
				<input type="text" name="cond" placeholder="  Excellent or good or bad" class="form-control"><br>
				
				<h5><br><button type="submit" class="btn btn-lg btn-primary " name="done" style="margin-left:300px;" > Submit </button><br></h5>
			
			</div>



		</form>
	

	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>


</html>