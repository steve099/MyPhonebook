<?php 
	
	require_once"connection.php";
	
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$contact_delete = "DELETE from contacts where id = '$id'";

		$sql_contact_delete = $conn->query($contact_delete);

		header("Location: index.php");

	}
	
 ?>