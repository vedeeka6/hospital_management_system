<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>doctor_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="ID" placeholder="ID"> <br><br>
			<input type="text" name="staff_name" placeholder="staff_name"> <br><br>
			<input type="text" name="address" placeholder="address"> <br><br>
			<input type="text" name="contact" placeholder="contact"> <br><br>
			<input type="text" name="dob" placeholder="dob"> <br><br>
			<input type="text" name="email" placeholder="email"> <br><br>
			<input type="text" name="salary" placeholder="salary"> <br><br>
			<input type="text" name="experience" placeholder="experience"> <br><br>
			<input type="text" name="specialization" placeholder="specialization"> <br><br>
			<input type="number" name="deptID" placeholder="deptID"> <br><br>
			<input type="text" name="password" placeholder="password"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$Doctor_id=$_POST["ID"];
	$staff_name=$_POST["staff_name"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	$dob=$_POST["dob"];
	$email=$_POST["email"];
	$salary=$_POST["salary"];
	$experience=$_POST["experience"];
	$specialization=$_POST["specialization"];
	$deptID=$_POST["deptID"];
	$password=$_POST["password"];
$query="INSERT INTO doctor(ID,staff_name,address,contact,dob,email,salary,experience,specialization,deptID,password) VALUES('$Doctor_id','$staff_name','$address','$contact','$dob','$email','$salary','$experience','$specialization','$deptID','$password')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

