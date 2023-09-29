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
			<a href="patient_insert.php" class="btn-contact mt-20px">INSERT DATA</a>

		</div>
	<table>
		<form>
			<u><h2 style="text-align: center; color: #23304a; ">PATIENT TABLE</h2></u>
		</form>
		<tr>
			<th width="3%">Patient_ID</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Diagnosis</th>
			<th>Phone_no</th>
			<th>Address</th>
			<th>Password</th>
			<th width="13%">Operations</th>

			
		</tr>
		<?php
		
		$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
		$sql="SELECT * FROM patient";
		$result=$con-> query($sql);

		if ($result -> num_rows > 0) {
			while($row=$result -> fetch_assoc()){
				echo "<tr><td>" .$row["pat_ID"] . "</td><td>" . $row["pat_name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["diagnosis"] . "</td><td>" . $row["phone_no"] . "</td><td>" . $row["pat_address"] . "</td><td>" . $row["pwd"] . "</td><td><a href='update_patient.php?up_patientid=$row[pat_ID]'><input type='submit' value='UPDATE' class='update'> </a>
				<a href='patient_delete.php?up_patientid=$row[pat_ID]'><input type='submit' value='DELETE' class='delete' onclick = 'return checkdelete()'> </a></td>
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