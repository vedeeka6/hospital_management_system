<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$pat_id=$_GET['up_patientid'];
$query="SELECT * FROM patient WHERE pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>patient_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE PATIENT DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Patient_name</label>
				<input type="text" name="pat_name" placeholder="pat_name" value="<?php echo $result['pat_name'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Age</label>
				<input type="number" name="age" placeholder="age" value="<?php echo $result['age'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Gender</label>
				<input type="text" name="gender" placeholder="gender" value="<?php echo $result['gender'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Diagnosis</label>
				<input type="text" name="diagnosis" placeholder="diagnosis" value="<?php echo $result['diagnosis'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">phone_no</label>
				<input type="text" name="phone_no" placeholder="phone_no" value="<?php echo $result['phone_no'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Patient_address</label>
				<input type="text" name="pat_address" placeholder="pat_address" value="<?php echo $result['pat_address'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Password</label>
				<input type="text" name="pwd" placeholder="pwd" value="<?php echo $result['pwd'];?>"> <br><br>
			</div>

			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/patient_table1.php"/>

	<?php 
	$pat_name=$_POST["pat_name"];
	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$diagnosis=$_POST["diagnosis"];
	$phone_no=$_POST["phone_no"];
	$pat_address=$_POST["pat_address"];
	$pwd=$_POST["pwd"];

$query="UPDATE patient set pat_name='$pat_name',age='$age',gender='$gender',diagnosis='$diagnosis',phone_no='$phone_no',pat_address='$pat_address',pwd='$pwd' WHERE pat_ID='$pat_id'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>