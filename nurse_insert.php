<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>nurse_insertion</title>
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
			<input type="number" name="salary" placeholder="salary"> <br><br>
			<input type="number" name="experience" placeholder="experience"> <br><br>
			<input type="text" name="shift" placeholder="shift"> <br><br>
			


			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$ID=$_POST["ID"];
	$staff_name=$_POST["staff_name"];
	$address=$_POST["address"];
	$contact=$_POST["contact"];
	$dob=$_POST["dob"];
	$email=$_POST["email"];
	$salary=$_POST["salary"];
	$experience=$_POST["experience"];
	$shift=$_POST["shift"];
$query="INSERT INTO nurse(ID,staff_name,address,contact,dob,email,salary,experience,shift) VALUES('$ID','$staff_name','$address','$contact','$dob','$email','$salary','$experience','$shift')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

