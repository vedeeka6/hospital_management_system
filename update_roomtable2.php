<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$roomtype=$_GET['up_roomtype'];
$query="SELECT * FROM roomtable2 WHERE room_type='$roomtype'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>update_roomtable2</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE ROOM TYPE DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">room_type</label>
				<input type="text" name="room_type" placeholder="room_type" value="<?php echo $result['room_type'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">charges</label>
				<input type="number" name="charges" placeholder="charges" value="<?php echo $result['charges'];?>"> <br><br>
			

			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/roomTable2.php"/>

	<?php 
	$room_type=$_POST["room_type"];
	$charges=$_POST["charges"];


$query="UPDATE roomtable2 set room_type='$room_type',charges='$charges' WHERE room_type='$roomtype'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>