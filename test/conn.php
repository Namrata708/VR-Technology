<?php
$conn=mysqli_connect('localhost','root','','news');
	if($conn){
		//echo "connected successfully";
	}
	else{
		echo $conn->error;
	}
	?>