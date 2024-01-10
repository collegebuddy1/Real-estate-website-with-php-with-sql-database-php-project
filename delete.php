<?php

include 'conn.php';

$id=$_GET['id'];

$q="DELETE FROM `proper` WHERE id=$id";

mysqli_query($con,$q);


header('location: disp.php');




?>