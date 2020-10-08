<?php

	$con = mysqli_connect("localhost","root","","farmpal");
	
	if(mysqli_connect_errno())
	{
		echo "Error connnection".mysqli_connect_errno();
	}
	

?>
