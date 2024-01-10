<?php

include 'conn.php';

if (isset($_POST['done']))
{
$id=$_GET['id'];
$username=$_POST['username'];
$prop=$_POST['prop'];
$rooms=$_POST['rooms'];
$address=$_POST['address'];
$cond=$_POST['cond'];
$q= "update proper set id=$id, username='$username', prop='$prop',  rooms='$rooms', address='$address', cond='$cond' where id=$id ";

$query=mysqli_query($con,$q);

header('location:disp.php');

}







?>



























<html>
<head>
<title>   </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		
	<div class="col-lg-6 m-auto">

		<form method="post">
	
	
	<br><br><div class="card">
				
				<div class="card-header bg-primary">
					<h1 class="text-white text-center"> UPDATION FORM</h1>
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
				
				<h5><br><button type="submit" class="btn btn-lg btn-primary " name="done" style="margin-left:300px;"> Submit </button><br></h5>
			
			</div>



		</form>
	

	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
</body>


</html>