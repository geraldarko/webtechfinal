<?php
require_once("../controllers/criminals_controller.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$result = select_criminal_by_id($id);
	$row = $result;
?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<h2>EDIT A CRIMINAL RECORD</h2>
	<form method="post">
		<span>Surname: </span> <input type="text" name="sname" value="<?php echo $row['surname']; ?>" required><br>
		<span>First Name: </span> <input type="text" name="fname" value="<?php echo $row['firstname']; ?>" required><br>
		<span>Other Name(s): <input type="text" name="oname" value="<?php echo $row['othernames']; ?>" placeholder="If Any..."><br>
			<span>Birth Date: <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required><br>
				<span>National ID: </span> <input type="number" name="nationalid" value="<?php echo $row['nationalid']; ?>" required><br>
				<span>Offence: </span> <input type="text" name="crime" value="<?php echo $row['crime']; ?>" required><br>
				<span>Conviction Date: <input type="date" name="doc" value="<?php echo $row['doc']; ?>" required><br>
					<input type="submit" name="submit" value="Save" id="save">
	</form>

<?php
	if (isset($_POST['submit'])) {
		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$oname = $_POST['oname'];
		$dob = $_POST['dob'];
		$nationalid = $_POST['nationalid'];
		$crime = $_POST['crime'];
		$doc = $_POST['doc'];

		$result = edit_criminal($id, $sname, $fname, $oname, $dob, $nationalid, $crime, $doc);

		if ($result) {
			header("Location: show.php?RecordUpdated");
		}
	}
} else {
	header("Location: show.php");
}
?>