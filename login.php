<?php

	session_start();
	include("connect.php");
	include("functions.php");
	$error = "";

	if(isset($_POST['submit']))
	{
		
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['pass']);
		
		if(email_exists($email, $con))
		{
		/*	$result = mysqli_query($con, "SELECT password FROM users WHERE email = '$email'");
			$retrievepassword = mysqli_fetch_assoc($result);
			
			if(md5($password) == $retrievepassword['password'])
			{
				$error= "Password is incorrect";
			}
			else
			{
			//header("Location: index.php");
			$error = "Email  exists";
			}
		*/
		$result = mysqli_query($con,"SELECT * FROM users WHERE email ='$email'");
		$retrieve = mysqli_fetch_assoc($result);
		$_SESSION['logged_in'] = true;
		$_SESSION['logged_as'] = $retrieve['role'];
		$_SESSION['firstName'] = $retrieve['firstName'];
		$_SESSION['lastName'] = $retrieve['lastName'];
		$_SESSION['email'] = $email;

		header("Location: main.php");
		}
		else
		{
			$error = "Email doesnot exists"; 
			//echo mysqli_error($con);
		} 
		
		
		
	}

?>

<!DOCTYPE html>
<head>

<title>Login</title>
<link rel="stylesheet" href="css/style_reg.css" />


</head>

<body>

<div id="error">
	<?php echo $error ?>
</div>

<div id="wrapper">

	<div id="formDiv">
		<form method="post" action="login.php" >
			<label>Email: </label><br />
			<input type="text" name="email" /><br /><br />
			
			<label>Password: </label><br />
			<input type="password" name="pass" /><br /><br />
			
			<input type="checkbox" name="keep" />
			<label>keep me logged in </label><br />
			
			<input type="submit" name="submit" value="login"/>
		</form>

	</div>

</div>

</body>
</html>
