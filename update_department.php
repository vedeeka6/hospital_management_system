<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$deptid=$_GET['up_deptid'];
$query="SELECT * FROM department WHERE deptID='$deptid'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>update_dept</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE DEPARTMENT DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">DeptID</label>
				<input type="number" name="deptID" placeholder="deptID"value="<?php echo $result['deptID'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Dept_name</label>
				<input type="text" name="dept_name" placeholder="dept_name" value="<?php echo $result['dept_name'];?>"> <br><br>
			</div>
			


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/department_table.php"/>

	<?php 
	
	$deptID=$_POST["deptID"];
	$dept_name=$_POST["dept_name"];

$query="UPDATE department set deptID='$deptID',dept_name='$dept_name' WHERE deptID='$deptid'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>