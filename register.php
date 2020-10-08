<?php

	include("connect.php");
	include("functions.php");
	$error = "";

	if(isset($_POST['submit']))
	{
		$firstName = mysql_real_escape_string($_POST['fname']);
		$lastName = mysql_real_escape_string($_POST['lname']);
		$role = $_POST['role'];
		$email = mysql_real_escape_string($_POST['email']);
		$password = $_POST['pass'];
		$passwordConfirm = $_POST['pass_confirm'];
		$image = $_FILES['image']['name'];
		$tmp_image = $_FILES['image']['tmp_name'];
		$imageSize = $_FILES['image']['size'];
		
		$date = date("Y-m-d");
		//echo $role;
		//exit();
		
		if(strlen($firstName)<3)
		{
			$error = "First name is too short";
		}
		
		else if(strlen($lastName)<3)
		{
			$error = "First name is too short";
		}

		
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error = "Enter valid email";
		}
		
		else if(strlen($password)<3)
		{
			$error = "Password must be greater than 8 characters";
		}
		
		else if($password !== $passwordConfirm)
		{
			$error = "Password doesnot match";
		}
		
		else if($image == "")
		{
			$error = "Please upload your image";
		}
		
		else if($imageSize > 1048576)
		{
			$error = "Image size must be less than 1 MB";
		}
		
		else
		{
			$password = md5($password);
			$imageExt = explode(".",$image);
			$imageExtension = $imageExt[1];
			
			if($imageExtension == 'PNG' || $imageExtension == 'png' || $imageExtension == 'jpg' || $imageExtension == 'JPG')
			{
				$image = rand(0,100000).rand(0,100000).rand(0,100000).time().".".$imageExtension;
			
				$insertQuery = "INSERT INTO `users`(firstName, lastName, role, email, password, image, date) VALUES('$firstName','$lastName','$role','$email','$password','$image','$date')";
				if(mysqli_query($con, $insertQuery))
				 {
				 	if(move_uploaded_file($tmp_image,"images/$image"))
					{
						$_SESSION['success'] = "You are successfully registered";
						echo $_SESSION['success'];
						
						header("Location: main.php");
					}
					else
					{
						$_SESSION['error'] = "You are not registered";
						echo $_SESSION['error'];
						//exit();
					}
				 }
				 else
				 {
				 		$_SESSION['error'] = "Database could not be saved.";
						echo $_SESSION['error'];
						//echo mysqli_error($con);
						//exit();
				 }
				 
			}
			else
			 {
			 	$_SESSION['error'] ="File must be an image";
			 	echo $_SESSION['error'];
			 	
			 }
					
		}		
		
	}

?>

<!DOCTYPE html>
<head>

<title>Register</title>
<link rel="stylesheet" href="css/style_reg.css" />


</head>

<body>

<div id="error">
	<?php echo $error ?>
</div>

<div id="wrapper">

	<div id="formDiv">
		<form method="post" action="register.php" enctype="multipart/form-data">
			<label>First Name: </label><br />
			<input type="text" name="fname"  /><br /><br />
			<label>Last Name: </label><br />
			<input type="text" name="lname" /><br /><br />
			<label>Role: </label><br />
			<select name="role" >
				<option value="admin">Admin</option>
				<option value="agriculture"> Agriculture Head</option>
				<option value="user"> User</option>
			</select>
			<br /><br />
			<label>Email: </label><br />
			<input type="text" name="email"  /><br /><br />
			<label>Password: </label><br />
			<input type="password" name="pass"  /><br /><br />
			<label>Re-enter Password: </label><br />
			<input type="password" name="pass_confirm"  /><br /><br />
			<label>Image: </label><br />
			<input type="file" name="image" /><br /><br />
			<input type="submit" name="submit" />
		</form>

	</div>

</div>

</body>
</html>
