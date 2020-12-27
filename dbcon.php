<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "cv";

$con = mysqli_connect($server, $user, $password, $db);

if($con)
{
	//echo'<script>alert("Connection Successfull")</script>';
}
else
{
	echo '<script>alert("Connection Not Successfull")</script>';
}

return $con;
?>
