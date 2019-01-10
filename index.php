<?php 
	include_once "connection.php";

	$contacts = array();
<<<<<<< HEAD
	if(isset($_GET['username'])){
		$username = $_GET['username'];
		$all_contacts = "SELECT * from users,contacts WHERE users.username = '$username' AND contacts.username = '$username'";

		$sql_all_contacts = mysqli_query($conn, $all_contacts);

		$total_contacts = $sql_all_contacts->num_rows;
		if (!isset($_SESSION['username'])) {
  		$_SESSION['msg'] = "You must log in first";
  		header('location: login.php');	
  	}
=======

	$all_contacts = "select * from contacts";

	$sql_all_contacts = $conn->query($all_contacts);

	$total_contacts = $sql_all_contacts->num_rows;

	while ($row = mysqli_fetch_assoc($sql_all_contacts)) {
		$contacts[] = $row;
	}
	if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<?php include"includes/header.inc"; ?>

		<!-- content section -->
		<div class="content">
<<<<<<< HEAD
			<p class="" style="color:blue; font-size: 20px; margin-left: 470px;">Welcome <strong><?php isset($_SESSION['username']); echo $_SESSION['username'];?>.</strong></p>
=======
			<p class="" style="color:blue; font-size: 20px;">Welcome <strong><?php isset($_SESSION['username']); echo $_SESSION['username'];?>.</strong></p>
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
			<div>
				<h1 class="floatl" style="display: inline;">
				<?php echo $total_contacts ?> Contact(s) Total</h1>

			</div>
	
			<a class="floatr" href="index.php?logout='1'"><button  class="cancel_contact_button" type="button">logout</button></a>		

<<<<<<< HEAD
			<a class="floatr" type="button" href="insert_contact.php?username=<?php isset($_SESSION['username']); echo $_SESSION['username'];?>" style="font-style: none;"><button style="background-color: green;" class="cancel_contact_button">New Contact</button></a>		
=======
			<a class="floatr" type="button" href ="insert_contact.php" style="font-style: none;"><button style="background-color: green;" class="cancel_contact_button">New Contact</button></a>		
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
			<div class="clear"></div>
				<hr class="pageTitle">
				<table id="contactsTable" class="display">
					<thead>
						<tr align="left">
<<<<<<< HEAD
							<th>First_Name:</th>
							<th>Last_name:</th>>
							<th>Nickname:</th>
							<th>Cell_Phone #:</th>
							<th>Actions</th>
						</tr>
					</thead>
					<?php while ($row = mysqli_fetch_array($sql_all_contacts)){ ?>
					<tbody>
						<tr>
							<td><a href="contact.php?id=<?php echo $row["id"]; ?>"><?php echo $row["contact_fname"]; ?></a></td>
							<td><?php echo $row["contact_lname"]; ?></td>
							<td><?php echo $row["contact_nickname"]; ?></td>
							<td><?php echo $row["contact_cphone"]; ?></td>
							<td><a href="update_contact.php?edit=<?php echo $row["id"]; ?>"><i class="fa fa-pencil"></i></a> | <a style="color:red" href="delete_contact.php?delete=<?php echo $row["id"]; ?>"><i class="fa fa-trash-o"></i></a></td>
						</tr>
					</tbody>
				<?php } 
			}?>
=======
							<th>Name:</th>
							<th>Nickname:</th>
							<th>Cell Phone:</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
					 	<?php foreach ($contacts as $contact) {?>
						<tr>
							<td><a href="contact.php?id=<?php echo $contact["id"]; ?>"><?php echo $contact["contact_fname"] . " " . $contact["contact_lname"]; ?></a></td>
							<td><?php echo $contact["contact_nickname"]; ?></td>
							<td><?php echo $contact["contact_cphone"]; ?></td>
							<td><a href="update_contact.php?id=<?php echo $contact["id"]; ?>"><i class="fa fa-pencil"></i></a> | <a style="color: red;"href="delete_contact.php?id=<?php echo $contact["id"] ?>"><i class="fa fa-trash-o"></i></a></td>
						</tr>
						<?php } ?>
					</tbody>
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
				</table>
		</div>
	</div>	
</body>
</html>		