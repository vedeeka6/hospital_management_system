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
			<a href="record_insert.php" class="btn-contact mt-20px">INSERT DATA</a>

		</div>

</head>
<body>
	<table>
		<form>
			<u><h2 style="text-align: center; color: #23304a; ">RECORD TABLE</h2></u>
		</form>
		<tr>
			<th width="3%">Record_ID</th>
			<th>Admit_Date</th>
			<th>Discharge_Date</th>
			<th>Receptionist_ID</th>
			<th>Pat_ID</th>
			<th width="13%">Operations</th>

		</tr>
		<?php
		
		$con= mysqli_connect("localhost","root","prince","hospital_management_system",'3308');
		$sql="SELECT * FROM record";
		$result=$con-> query($sql);

		if ($result -> num_rows > 0) {
			while($row=$result -> fetch_assoc()){
				echo "<tr><td>" .$row["rec_ID"] . "</td><td>" . $row["admit_date"] . "</td><td>" . $row["discharge_date"] . "</td><td>"  . "</td><td>" . $row["ID"] . "</td><td>"  . "</td><td>" . $row["pat_ID"] . "</td><td><a href='update_record.php?up_Recordid=$row[rec_ID]'><input type='submit' value='UPDATE' class='update'> </a>
				<a href='record_delete.php?up_roomNo=$row[rec_ID]'><input type='submit' value='DELETE' class='delete' onclick = 'return checkdelete()'> </a></td>
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