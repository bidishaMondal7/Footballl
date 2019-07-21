<?php 
include 'dbhandler.php';
if (isset($_POST['signup'])) {
	$firstname=mysqli_real_escape_string($con,$_POST['fName']);
	$lastname=mysqli_real_escape_string($con,$_POST['lName']);
	$address=mysqli_real_escape_string($con,$_POST['add']);
	$state=mysqli_real_escape_string($con,$_POST['state']);
	$age=mysqli_real_escape_string($con,$_POST['age']);
	$height=mysqli_real_escape_string($con,$_POST['height']);
	$weight=mysqli_real_escape_string($con,$_POST['weight']);
	$locality=mysqli_real_escape_string($con,$_POST['locality']);
	$division=mysqli_real_escape_string($con,$_POST['division']);
	$club=mysqli_real_escape_string($con,$_POST['club']);
	$trainer=mysqli_real_escape_string($con,$_POST['trainer']);
	$achi=mysqli_real_escape_string($con,$_POST['achi']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$ss="INSERT INTO 
		test(firstname,lastname,address,state,age,height,weight,locality,division,club,trainer,achi,password) 
		VALUES ('$firstname','$lastname','$address','$state','$age','$height','$weight','$locality','$division','$club','$trainer','$achi','$password')
		;";
	
	if(empty($firstname)||empty($lastname)||empty($address)||empty($state)||empty($age)||empty($height)||empty($weight)||empty($locality)||empty($division)||empty($club)||empty($trainer)||empty($achi)||empty($password))
	{
		echo '<script type="text/javascript"alert("fill up") </script>';
		header("location:index.php?signuperror2");
	}
	else
	{
		mysqli_query($con,$sql);
		header("location:index.php?signupdone");
	}
	mysqli_query($con,$ss);
		header("location:index.php?signupdone");
}
else
{
	header("location:index.php?signuperror=1");
}

?>
