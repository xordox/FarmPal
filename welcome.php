<?php 
session_start();
$username = $_SESSION['firstName'];
//$email = $_SESSION['email'];
echo "Welcome " . $username . "!"; 
?> 
<a href=logout.php>Logout</a>