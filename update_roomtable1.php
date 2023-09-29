<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$room_no=$_GET['up_roomNo'];
$bed_no=$_GET['up_bedno'];

$query="SELECT * FROM roomtable1 WHERE room_no='$room_no' AND bed_no='$bed_no'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>roomtable1_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE ROOM DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Room_no</label>
				<input type="text" name="room_no" placeholder="room_no" value="<?php echo $result['room_no'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Bed_no</label>
				<input type="number" name="bed_no" placeholder="bed_no" value="<?php echo $result['bed_no'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Room_type</label>
				<input type="text" name="room_type" placeholder="room_type" value="<?php echo $result['room_type'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/roomTable_1.php"/>

	<?php 
	$room_no=$_POST["room_no"];
	$bed_no=$_POST["bed_no"];
	$room_type=$_POST["room_type"];

$query="UPDATE roomtable1 set room_no='$room_no',bed_no='$bed_no',room_type='$room_type' WHERE room_no='$room_no'AND bed_no='$bed_no'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>