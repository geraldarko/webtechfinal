<?php
session_start();
if(!isset($_SESSION['admin'])){
	header("Location: loginadmin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRIMINAL RECORDS</title>
	<link rel="stylesheet" type="text/css" href="show.css">
	<!-- <meta http-equiv="Refresh" content="0; url=loginadmin.php"> -->
</head>
<body>	
	<h2>CRIMINAL RECORDS</h2>
	<span> To Add A Criminal Record <a href="insert.php">Click Here</a></span>
	<?php 
		require_once("../controllers/criminals_controller.php");
		$result = select_criminals();
		?>
		<table>
			<thead>
				<tr>
					<th>Surname</th>
					<th>First Name</th>
					<th>Other Name(s)</th>
					<th>Birth Date</th>
					<th>National ID</th>
					<th>Offence</th>
					<th>Conviction Date</th>
					<th>Actions</th>
				</tr>
			</thead>
			
		<?php
		foreach($result as $row){
			echo "<tr>";
			echo "<td>".$row['surname']."</td>";
			echo "<td>".$row['firstname']."</td>";
			echo "<td>".$row['othernames']."</td>";
			echo "<td>".$row['dob']."</td>";
			echo "<td>".$row['nationalid']."</td>";
			echo "<td>".$row['crime']."</td>";
			echo "<td>".$row['doc']."</td>";
			echo "<td><a href='delete.php?id=".$row['id']."' onClick='return confirm(".'"Are You Sure You Would Like To Delete Record?"'.");' id='delete'>DELETE</a>
			<a href='edit.php?id=".$row['id']."' onClick='return confirm(".'"Are You Sure You Would Like To Edit This Record?"'.");' id='edit'>EDIT</a></td>";
			echo "</tr>";
		}
	?>
	</table>
</body>
</html>