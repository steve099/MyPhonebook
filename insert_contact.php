<?php 
	require_once"connection.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<?php include"includes/head.inc"; ?>
	<script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
	<div class="wrapper">

		<!-- header section -->
		<div class="header">
			<div class="headerContent"><h1>CONTACT LIST</h1></div>
		</div>

		<!-- content section -->
		<div class="content">
		<div><h1>Create New Contact</h1></div>
			<hr>
			<div class="contact">
				<div class="contact_insert">
					<form action="insert_contact.php" method="post" enctype="multipart/form-data">
						<table style="float:left" width="50%">
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="fname" placeholder="First Name"  size="40%" required></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="lname" placeholder="Last Name" size="40%" required></td>
							</tr>
							<tr>
								<td>Nickname:</td>
								<td><input type="text" name="nickname" placeholder="Nickname" size="40%" required></td>
							</tr>
							<tr>
								<td>Profile Image:</td>
								<td><input type="file" name="profile"></td>
							</tr>
							<tr>
								<td>Cell Phone #:</td>
								<td><input type="text" name="cphone" placeholder="Cell Phone" size="40%" required></td>
							</tr>
							<tr>
						</table>
						<table style="float:right" width="45%">
							<tr>
								
							</tr>
						</table>
						<div class="clear"></div>
						<input class="insert_contact_button" type="submit" name="submit" value="Insert Contact">
						<a href="index.php"><button class="cancel_contact_button" type="button">Cancel</button></a>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
</body>
</html>		
<?php 

	if (isset($_POST['submit'])) {
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$nickname = $_POST['nickname'];
		$profile = $_FILES['profile']['name'];
		$profile_tmp = $_FILES['profile']['tmp_name'];
		$cphone = $_POST['cphone'];

		move_uploaded_file($profile_tmp, "profile_images/$profile");

		$insert_contact = "INSERT into contacts (contact_fname, contact_lname, contact_nickname, contact_profile, contact_cphone) values ('$fname', '$lname', '$nickname','$profile','$cphone')";

		$sql_insert_contact = $conn->query($insert_contact);

		if ($sql_insert_contact == true) {
			header("Location: index.php");
		}
	}

 ?>