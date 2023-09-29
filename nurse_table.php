<!DOCTYPE html>
<html>
<head>
	<title>Doctors_Record</title>
	<link href="css/style.css" type="text/css" rel="stylesheet">


	<style type="text/css">
		table tr,td,th{
			border: 2px solid #000;
			color: #354461;
			font-size: 14px;
			font-family: monospace;
			text-align: left;
		}
		th {
			background-color: #354461;
			color: white; 
		}
		table{
			border-collapse: collapse;
		}
		.update{
			background-color: green;
			color: white;
			outline: none;
			border-radius: 6px;
		}
		.delete{
			background-color: red;
			color: white;
			outline: none;
			border-radius: 6px;
		}
		tr:nth-child(odd) {background-color: #52b2bf}

	</style>
</head>
<body>
		<div class="logo">
		<div class="col md-3">
			<a href="nurse_insert.php" class="btn-contact mt-20px">INSERT DATA</a>

		</div>
</head>
<body>
	<table>
		<form>
			<u><h2 style="text-align: center; color: #23304a; ">NURSE TABLE</h2></u>
		</form>
		<tr>
			<th width="3%">ID</th>
			<th>staff_Name</th>
			<th>Address</th>
			<th>Contact</th>
			<th>Date_of_birth</th>
			<th>Email</th>
			<th>Salary</th>
			<th width="3%">Experience</th>
			<th>Shift</th>
			<th width="13%">Operations</th>

			
		</tr>
		<?php
		
		$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
		$sql="SELECT * FROM nurse";
		$result=$con-> query($sql);

		if ($result -> num_rows > 0) {
			while($row=$result -> fetch_assoc()){
				echo "<tr><td>" .$row["ID"] . "</td><td>" . $row["staff_name"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["dob"] . "</td><td>" . $row["email"] . "</td><td>" . $row["salary"] . "</td><td>" . $row["experience"] . "</td><td>" . $row["shift"] . "</td><td><a href='update_nurse.php?up_nurseid=$row[ID]'><input type='submit' value='UPDATE' class='update'> </a>
				<a href='nurse_delete.php?up_nurseid=$row[ID]'><input type='submit' value='DELETE' class='delete' onclick = 'return checkdelete()'> </a></td>
				</tr>";
			}
		}
		else{
			echo "no results";
		}
		$con -> close();
		?>
	</table>
		<script>
		function checkdelete()
		{
			return confirm('Are you sure, you want to delete this record ?');
		}
	</script>

</body>
</html>