<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$govern=$_GET['up_govern'];
$roomno=$_GET['up_roomno'];

$query="SELECT * FROM governs WHERE ID='$govern' AND room_no='$roomno'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>govern_updation</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE GOVERNS DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Doctor_id</label>
				<input type="number" name="ID" placeholder="ID" value="<?php echo $result['ID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">room_no</label>
				<input type="text" name="room_no" placeholder="room_no" value="<?php echo $result['room_no'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/governs_table.php"/>

	<?php 
	$ID=$_POST["ID"];
	$room_no=$_POST["room_no"];
$query="UPDATE governs set ID='$ID',room_no='$room_no' WHERE ID='$govern' AND room_no='$roomno'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>