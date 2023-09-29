<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>governs_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="ID" placeholder="ID"> <br><br>
			<input type="text" name="room_no" placeholder="room_no"> <br><br>
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$ID=$_POST["ID"];
	$room_no=$_POST["room_no"];
$query="INSERT INTO governs(ID,room_no) VALUES('$ID','$room_no')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

