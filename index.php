<?php 
	include_once "connection.php";

	$contacts = array();

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
			<p class="" style="color:blue; font-size: 20px;">Welcome <strong><?php isset($_SESSION['username']); echo $_SESSION['username'];?>.</strong></p>
			<div>
				<h1 class="floatl" style="display: inline;">
				<?php echo $total_contacts ?> Contact(s) Total</h1>

			</div>
	
			<a class="floatr" href="index.php?logout='1'"><button  class="cancel_contact_button" type="button">logout</button></a>		

			<a class="floatr" type="button" href ="insert_contact.php" style="font-style: none;"><button style="background-color: green;" class="cancel_contact_button">New Contact</button></a>		
			<div class="clear"></div>
				<hr class="pageTitle">
				<table id="contactsTable" class="display">
					<thead>
						<tr align="left">
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
				</table>
		</div>
	</div>	
</body>
</html>		