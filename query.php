<?php
session_start();
if(isset($INCLUDETYPE) AND $INCLUDETYPE==='QUERY')
{
	$query = $_POST['query'];
	$email = $_SESSION['email'];
	//echo $query;
	//echo ($_SESSION['email']);
	//exit();
	$view = "SELECT * FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($con, $view);
	$result1 = mysqli_fetch_assoc($result);

	$role = $result1['role'];
	$firstName = $result1['firstName'];
	$lastName = $result1['lastName'];
	//echo $role;
	//echo $firstname;
	//echo $lastName;
	//exit();
	if($query!= "")
	{
		$insert = "INSERT INTO query( firstName, lastName, role, query) VALUES ( '$firstName', '$lastName', '$role', '$query')";
		if(mysqli_query($con, $insert))
		//if($insert)
		{
			$_SESSION["success"] = "Your query has been submitted. Thank You.";
			echo $_SESSION["success"];
		}
		else
		{
			$_SESSION["error"] = "Could not be submitted. Please try again after sometime.";
			echo $_SESSION["error"];
			echo mysqli_error($con);
		}
	}
	else
	{
		echo "Please fill the query below. ";
	}
}
else if(isset($INCLUDETYPE) AND $INCLUDETYPE==='ANSQUERY')

$ans = $_POST['ans'];
$email = $_SESSION['email'];

$view = "SELECT * FROM `users` WHERE `email` = '$email'";
$result = mysqli_query($con, $view);
$result1 = mysqli_fetch_assoc($result);

$role = $result1['role'];
$firstName = $result1['firstName'];
$lastName = $result1['lastName'];

$get = "SELECT * FROM `query` WHERE `id` = '$id'";
$get1 = mysqli_query($con, $view);
$get2 = mysqli_fetch_assoc($get1);

$query = $get2['query'];

if($ans!= "")
{
	$insert = "INSERT INTO query( firstName, lastName, role, query, ans) VALUES ( '$firstName', '$lastName', '$role', '$query', '$ans')";
	if(mysqli_query($con, $insert))
	//if($insert)
	{
		$_SESSION["success"] = "Your query has been submitted. Thank You.";
		echo $_SESSION["success"];
	}
	else
	{
		$_SESSION["error"] = "Could not be submitted. Please try again after sometime.";
		echo $_SESSION["error"];
		echo mysqli_error($con);
	}
}
else
{
	echo "Please fill the query below. ";
}

?>