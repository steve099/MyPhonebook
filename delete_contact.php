<?php 
	
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
	}
	
 ?>