<?php

require_once ('connect.php');

	$id = $_GET['id'];
	$DelSql = "DELETE FROM `etudiant` WHERE id=$id";

	$res = mysqli_query($con, $DelSql);
	if ($res) {
		header("Location: view.php");
	}else{
		echo "Failed to delete";
	}

 ?>