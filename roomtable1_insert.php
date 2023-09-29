<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>roomtable1_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="text" name="room_no" placeholder="room_no"> <br><br>
			<input type="number" name="bed_no" placeholder="bed_no"> <br><br>
			<input type="text" name="room_type" placeholder="room_type"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$room_no=$_POST["room_no"];
	$bed_no=$_POST["bed_no"];
	$room_type=$_POST["room_type"];
$query="INSERT INTO roomtable1(room_no,bed_no,room_type) VALUES('$room_no','$bed_no','$room_type')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

