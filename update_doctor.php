<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$id=$_GET['up_id'];
$query="SELECT * FROM doctor WHERE ID='$id'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>doctor_insertion</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE DOCTORS DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Doctor_id</label>
				<input type="number" name="ID" placeholder="ID" value="<?php echo $result['ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">staff_name</label>
				<input type="text" name="staff_name" placeholder="staff_name" value="<?php echo $result['staff_name'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">address</label>
				<input type="text" name="address" placeholder="address" value="<?php echo $result['address'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">contact</label>
				<input type="text" name="contact" placeholder="contact" value="<?php echo $result['contact'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Dob</label>
				<input type="text" name="dob" placeholder="dob" value="<?php echo $result['dob'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Email</label>
				<input type="text" name="email" placeholder="email" value="<?php echo $result['email'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Salary</label>
				<input type="text" name="salary" placeholder="salary" value="<?php echo $result['salary'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Experience</label>
				<input type="text" name="experience" placeholder="experience" value="<?php echo $result['experience'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Specialization</label>
				<input type="text" name="specialization" placeholder="specialization" value="<?php echo $result['specialization'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">DEPT_id</label>
				<input type="number" name="deptID" placeholder="deptID" value="<?php echo $result['deptID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Password</label>
				<input type="text" name="password" placeholder="password" value="<?php echo $result['password'];?>"> <br><br>
			</div>


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/doctor_table.php"/>

	<?php  



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

$query="UPDATE doctor set ID='$Doctor_id',staff_name='$staff_name',address='$address',contact='$contact',dob='$dob',email='$email',salary='$salary',experience='$experience',specialization='$specialization',deptID='$deptID',password='$password' WHERE ID='$id'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>