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
	$username=$_POST["nurse_id"];
	$password=$_POST["password"];

$sql="select * from nurse where ID='".$username."' AND nurse_pwd= '".$password."'";
$data=mysqli_connect($host,$user,$password,$db,"3308");

$result=mysqli_query($data,$sql);
$fetch1=mysqli_fetch_array($result);
if($fetch1)
{
echo '<span style="color:green;text-align:center;">SUCCESSFULLY LOGGED-IN, KINDLY SCROLL DOWN FOR YOUR DATA</span>';


}
else{
		echo '<span style="color:red;text-align:center;">INCORRECT ID/PASSWORD</span>';

}
}



?>






<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table tr,td,th{
			border: 2px solid #000;
			color: #354461;
			font-size: 14px;
			font-family: monospace;
			text-align: left;
		}
		th {
			background-color: #354461;
			color: white; 
		}
		table{
			border-collapse: collapse;
		}
		
		tr:nth-child(odd) {background-color: #52b2bf}

	</style>

	<title></title>
</head>
<body>


<center>
	<h1>HHH NURSE Login</h1>
	<br><br><br><br>
	<h1>ENTER DETAILS</h1>
	<div style="background-color: #588BAE; width: 500px;">
		<br><br>
		<form action="#" method="POST">
	<div>
		<label>Nurse_id</label>
		<input type="text" name="nurse_id" required>
	</div>
	<br><br>
	<div>
		<label>password</label>
		<input type="password" name="password" value="password" required>
	</div>
	<br><br>
	<div>
		<input type="submit" value="Login" name="login_btn">
	</div>
	</form>
	<br><br>
	
	</div>
</center>
<table>
		<form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<u><h2 style="text-align: center; color: #23304a; ">NURSE VIEW</h2></u>
		</form>
		<tr>
			<th width="3%">Nurse_ID</th>
			<th>Staff_Name</th>
			<th>Address</th>
			<th>Contact_No</th>
			<th>Date_Of_Birth</th>
			<th>Email_Id</th>
			<th>Salary</th>
			<th>Experience</th>
			<th>Shift</th>

			<th>Room_no</th>





		</tr>
		<?php
		if (isset($_POST["login_btn"])) {
			$username=$_POST["nurse_id"];
			$password=$_POST["password"];


		$query="SELECT * FROM nurse_view WHERE ID='$username'";
		$con=mysqli_connect($host,$user,$password,$db,"3308");

		$data=mysqli_query($con,$query);
		$row=mysqli_fetch_array($data);
		if ($row) {
			echo
				"<tr>
				<td>" .$row["ID"] . "</td>
				<td>" . $row["staff_name"] . "</td>
				<td>" . $row["address"] . "</td>
				<td>" . $row["contact"] . "</td>
				<td>" . $row["dob"] . "</td>
				<td>" . $row["email"] . "</td>
				<td>" . $row["salary"] . "</td>
				<td>" . $row["experience"] . "</td>
				<td>" . $row["shift"] . "</td>

				
				<td>" . $row["room_no"] . "</td>
				</tr>" ;
				
				
				
			}
		}
		else{
			echo "no results";
		}
			# code...
		

		 


		
		
				

		


		?>
		
	</table>

	

</body>
</html>