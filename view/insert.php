<!DOCTYPE html>
<html>

<head>
	<title>INSERT INTO CRIMINAL RECORD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<h2>ADD A CRIMINAL RECORD</h2>

	<form method="post">
		<span>Surname: </span> <input type="text" name="sname" required><br>
		<span>First Name: </span> <input type="text" name="fname" required><br>
		<span>Other Name(s): </span> <input type="text" name="oname" placeholder="If Any..."><br>
		<span>Birth Date: </span> <input type="date" name="dob" required><br>
		<span>National ID: </span> <input type="number" name="nationalid" required><br>
		<span>Offence: </span> <input type="text" name="crime" required><br>
		<span>Conviction Date: </span> <input type="date" name="doc" required><br>
		<input type="submit" name="submit" value="Save" id="save">
	</form>
	<?php
	if (isset($_POST['submit'])) {
		require_once("../controllers/criminals_controller.php");

		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$oname = $_POST['oname'];
		$dob = $_POST['dob'];
		$nationalid = $_POST['nationalid'];
		$crime = $_POST['crime'];
		$doc = $_POST['doc'];

		if (strlen($nationalid) == 10) {
			$result = insert_criminal($sname, $fname, $oname, $dob, $nationalid, $crime, $doc);

			if ($result) {
				header("Location: show.php?RecordAddedSuccessfully");
			}
		} else {
			echo "<script>alert('Invalid ID.(ID should be of 10 characters)')</script>";
		}
	}
	?>
</body>

</html>