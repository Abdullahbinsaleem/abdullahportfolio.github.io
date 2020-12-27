<?php

include 'dbcon.php';

$name = $_POST['nam'];
$email = $_POST['emai'];
$message = $_POST['msg'];

$query = "INSERT INTO contact(name,email,message) VALUES ('$name','$email','$message')";

$run = mysqli_query($con,$query);

if($run)
{
	?>
<script> alert('Sent')
	window.location='index.html' </script>
       <?php
}
else{
	?>
<script> alert('Something went wrong!')
       //window.location='index.html' </script>
       <?php
}

?>