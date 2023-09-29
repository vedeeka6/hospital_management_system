<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
if ($con){
	echo "Provide following information for data insertion";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>department_insertion</title>
</head>
<body>
<div style="position: center">
	<form action="" method="POST">
			<input type="number" name="deptID" placeholder="deptID"> <br><br>
			<input type="text" name="dept_name" placeholder="dept_name"> <br><br>
			
			<input type="submit" name="save_btn" value="Save">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "Saved Successfully";
	$deptID=$_POST["deptID"];
	$dept_name=$_POST["dept_name"];
$query="INSERT INTO department(deptID,dept_name) VALUES('$deptID','$dept_name')";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>

