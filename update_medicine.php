<?php 
$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');

$med_name=$_GET['up_medname'];
$query="SELECT * FROM medicine WHERE med_name='$med_name'";
$data=mysqli_query($con,$query);
$result=mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
	<title>update_medicine</title>
</head>
<body>

			<form  action="" method="POST">
			<div style="text-align: center; color: #23304a; font-weight: bold; " >UPDATE MEDICINE DETAILS</div>

			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Medicine_name</label>
				<input type="text" name="med_name" placeholder="med_name" value="<?php echo $result['med_name'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Price</label>
				<input type="number" name="price" placeholder="price" value="<?php echo $result['price'];?>"> <br><br>
			</div>
			<div class="form">
				<label style="text-align: center; color: #000080; font-weight: bold; ">Brand</label>
				<input type="text" name="brand" placeholder="brand" value="<?php echo $result['brand'];?>"> <br><br>
			</div>


			<input type="submit" name="save_btn" value="Save Updates">			
	</form>
</div>
<?php
if (isset($_POST["save_btn"])) {
	echo "<script>alert('Record Updated')</script>";
	?>
	<meta http-equiv="refresh" content="0; url= http://localhost:8012/HHHFinal/HHHF/medicine_table.php"/>

	<?php 
	$med_name=$_POST["med_name"];
	$price=$_POST["price"];
	$brand=$_POST["brand"];


$query="UPDATE medicine set med_name='$med_name',price='$price',brand='$brand' WHERE med_name='$med_name'";
$data=mysqli_query($con,$query);
}  

?>

</body>
</html>