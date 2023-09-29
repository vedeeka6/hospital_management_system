<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$prescribed=$_GET['up_prescribe'];
$med_name=$_GET['up_medname'];

$query="SELECT * FROM is_prescribed WHERE pat_ID='$prescribed' AND med_name='$med_name'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>isprescribed_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE PRESCRIPTION DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">pat_ID</label>
				<input type="number" name="pat_ID" placeholder="pat_ID" value="<?php echo $result['pat_ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">med_name</label>
				<input type="text" name="med_name" placeholder="med_name" value="<?php echo $result['med_name'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">dose</label>
				<input type="text" name="dose" placeholder="dose" value="<?php echo $result['dose'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/is_prescribed_table.php"/>

	<?php 
	$pat_ID=$_POST["pat_ID"];
	$med_name=$_POST["med_name"];
	$dose=$_POST["dose"];
$query="UPDATE is_prescribed set pat_ID='$pat_ID',med_name='$med_name',dose='$dose' WHERE pat_ID='$prescribed'AND med_name='$med_name'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>