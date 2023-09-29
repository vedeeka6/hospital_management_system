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
	$username=$_POST["pat_ID"];
	$password=$_POST["password"];

$sql="select * from patient where pat_ID='".$username."' AND pwd= '".$password."'";
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
	<h1>HHH PATIENT Login</h1>
	<br><br><br><br>
	<h1>ENTER DETAILS</h1>
	<div style="background-color: #588BAE; width: 500px;">
		<br><br>
		<form action="#" method="POST">
	<div>
		<label>Patient_id</label>
		<input type="text" name="pat_ID" required>
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
			<u><h2 style="text-align: center; color: #23304a; ">PATIENT MEDICAL RECORDS</h2></u>
		</form>
		<tr>
			<th width="3%">Patient_ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Diagnosis</th>
			<th>Dr_ID</th>
			<th>Dr_Name</th>
			<th>Checup_date</th>
			<th>Phone_no</th>
			<th>Address</th>
			<th>Room_no</th>
			<th>Bed_no</th>
			<th>Med_name</th>
			<th>Dose</th>
			<th>Admit_date</th>
			<th>Discharge_date</th>
			
			
			
			





		</tr>
		<?php
		if (isset($_POST["login_btn"])) {
			$username=$_POST["pat_ID"];
			$password=$_POST["password"];


		$query="SELECT * FROM pat_view1 WHERE pat_ID='$username'";
		$con=mysqli_connect($host,$user,$password,$db,"3308");

		$data=mysqli_query($con,$query);
		$row=mysqli_fetch_array($data);
		if ($row) {
			echo
				"<tr>
				<td>" .$row["pat_ID"] . "</td>
				<td>" . $row["pat_name"] . "</td>
				<td>" . $row["age"] . "</td>
				<td>" . $row["gender"] . "</td>
				<td>" . $row["diagnosis"] . "</td>
				<td>" . $row["Dr_ID"] . "</td>
				<td>" . $row["Dr_name"] . "</td>
				<td>" . $row["checkup_date"] . "</td>
				<td>" . $row["phone_no"] . "</td>
				<td>" . $row["pat_address"] . "</td>
				<td>" . $row["room_no"] . "</td>
				<td>" . $row["bed_no"] . "</td>
				<td>" . $row["med_name"] . "</td>
				<td>" . $row["dose"] . "</td>
				<td>" . $row["admit_date"] . "</td>
				<td>" . $row["discharge_date"] . "</td>
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