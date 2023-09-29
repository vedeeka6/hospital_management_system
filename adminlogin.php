<?php

$host="localhost";
$user="root";
$password="prince";
$db="hospital_management_system";

$data=mysqli_connect($host,$user,$password,$db,"3308");
if($data==false)
{
	die("connection error");
}
 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];

	$sql="select * from login where username='".$username."' AND password= '".$password."'";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row)
	{
		header("location:admin.html");
	}
	else
	{
		echo "username/password incorrect";
	}

}



 ?>






<!DOCTYPE html>
<html>
<head>

	<title></title>
</head>
<body>


<center>
	<h1>HHH Admin Login</h1>
	<br><br><br><br>
	<div style="background-color: #588BAE; width: 500px;">
		<br><br>
		<form action="#" method="POST">
	<div>
		<label>username</label>
		<input type="text" name="username" required>
	</div>
	<br><br>
	<div>
		<label>password</label>
		<input type="password" name="password" required>
	</div>
	<br><br>
	<div>
		<input type="submit" value="Login" >
	</div>
	</form>
	<br><br>
	
	</div>
</center>
	

</body>
</html>