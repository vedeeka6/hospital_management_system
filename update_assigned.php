<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$assign=$_GET['up_assign'];
$query="SELECT * FROM assigned WHERE pat_ID='$assign'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>assigned_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE ASSIGNED DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Patient_ID</label>
				<input type="number" name="pat_ID" placeholder="pat_ID" value="<?php echo $result['pat_ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">room_no</label>
				<input type="text" name="room_no" placeholder="room_no" value="<?php echo $result['room_no'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">bed_no</label>
				<input type="number" name="bed_no" placeholder="bed_no" value="<?php echo $result['bed_no'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/assign_table.php"/>

	<?php 
	$pat_ID=$_POST["pat_ID"];
	$room_no=$_POST["room_no"];
	$bed_no=$_POST["bed_no"];

$query="UPDATE assigned set pat_ID='$pat_ID',room_no='$room_no',bed_no='$bed_no' WHERE pat_ID='$assign'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>