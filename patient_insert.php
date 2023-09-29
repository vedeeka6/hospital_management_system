<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>patient_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">

			<input type="text" name="pat_name" placeholder="pat_name"> <br><br>
			<input type="number" name="age" placeholder="age"> <br><br>
			<input type="text" name="gender" placeholder="gender"> <br><br>
			<input type="text" name="diagnosis" placeholder="diagnosis"> <br><br>
			<input type="text" name="phone_no" placeholder="phone_no"> <br><br>
			<input type="text" name="pat_address" placeholder="pat_address"> <br><br>
			<input type="text" name="pwd" placeholder="pwd"> <br><br>
			


			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$pat_name=$_POST["pat_name"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$diagnosis=$_POST["diagnosis"];
	$phone_no=$_POST["phone_no"];
	$pat_address=$_POST["pat_address"];
	$pwd=$_POST["pwd"];
	
$query="INSERT INTO patient(pat_name,age,gender,diagnosis,phone_no,pat_address,pwd) VALUES('$pat_name','$age','$gender','$diagnosis','$phone_no','$pat_address','$pwd')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

