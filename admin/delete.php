<?php 
require_once("../controllers/criminals_controller.php");
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$result = delete_criminal($id);
	if($result){
		header("Location: show.php?Record+Deleted+Successfully");
	}

}else{
	header ("Location: show.php?Record+Could+Not+Be+Deleted");
	}
 ?>

