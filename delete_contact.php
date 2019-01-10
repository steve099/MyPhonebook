<?php 
	
<<<<<<< HEAD
	include_once("connection.php");
	
	if (isset($_GET['delete'])) {
		
		$id = $_GET['delete'];

		$query = "SELECT username FROM contacts where id = '$id'";

		$result = mysqli_query($conn,$query);

  	if (mysqli_num_rows($result) == 1) {
  		while($row = mysqli_fetch_assoc($result)){
  				mysqli_query($conn,"DELETE from contacts where id = '$id'");
				header("location: index.php?username=".$row['username']);
			}
		}
=======
	require_once"connection.php";
	
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];

		$contact_delete = "DELETE from contacts where id = '$id'";

		$sql_contact_delete = $conn->query($contact_delete);

		header("Location: index.php");

>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
	}
	
 ?>