<?php
session_start();
include 'dbhandler.php';
if (isset($_POST['login'])) {

	$name=mysqli_real_escape_string($con,$_POST['name']);
	$pass=mysqli_real_escape_string($con,$_POST['pass']);
	$sql= "SELECT * FROM test WHERE firstname='$name';";
	$result=mysqli_query($con,$sql);
	$resultcheck=mysqli_num_rows($result);
	if ($resultcheck<1) {
		header("location: index.php?loginerror=11");
		exit();
	}
	else
	{
		if ($row=mysqli_fetch_assoc($result)) {
			if ($pass!=$row['password']) {
				echo '<script type=text/javascript>alert("Invalid Entry!!try again...");
				location.href("index.php")</script>';
				exit();
			}
			else{
				$_SESSION['name']=$row['firstname'];
				$_SESSION['pass']=$row['password'];
				header("location:index.php?loggedin");
			}
		}
	}
}
else
{
	header(location('index.php?loginerror=10'));
}
?>