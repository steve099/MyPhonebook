<?php 
	require_once"connection.php";

<<<<<<< HEAD
	if (isset($_GET['edit'])) {
		
		$id = $_GET['edit'];
=======
	if (isset($_GET['id'])) {
		
		$id = $_GET['id'];
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d

		$get_contact = "select * from contacts where id = '$id'";

		$sql_get_contact = $conn->query($get_contact);

		$row = mysqli_fetch_array($sql_get_contact);
	}
 ?>
 <?php 

<<<<<<< HEAD
	if (isset($_POST['submit'],$_GET['edit'])) {

		$id = $_GET['edit'];
=======
	if (isset($_POST['submit'])) {

		$id = $_POST['id'];

>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$nickname = $_POST['nickname'];
		$profile = $_FILES['profile']['name'];
		if ($profile != "") {
			$profile_tmp = $_FILES['profile']['tmp_name'];
<<<<<<< HEAD
			move_uploaded_file($profile_tmp, "profile_images/$profile");
=======
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
		}else{
			$profile = $row['contact_profile'];
		}
		$cphone = $_POST['cphone'];

<<<<<<< HEAD
		$query = "SELECT username FROM contacts WHERE id = '$id'";
		$result = mysqli_query($conn,$query);
		if(mysqli_num_rows($result)){
			while ($row = mysqli_fetch_array($result)) {
				$update_contact = "UPDATE contacts set contact_fname='$fname', contact_lname='$lname', contact_nickname='$nickname', contact_cphone='$cphone' where id = '$id'";

				$sql_update_contact = $conn->query($update_contact);

				if ($sql_update_contact == true) {
				header("Location: index.php?username=".$row['username']);
				}
		}

=======
		move_uploaded_file($profile_tmp, "profile_images/$profile");

		$update_contact = "UPDATE contacts set contact_fname='$fname', contact_lname='$lname', contact_nickname='$nickname', contact_cphone='$cphone' where id = '$id'";

		$sql_update_contact = $conn->query($update_contact);

		if ($sql_update_contact == true) {
			header("Location: index.php");
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
		}
	}
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
		<div><h1>Update Contact</h1></div>
			<hr>
			<div class="contact">
				<div class="contact_insert">
<<<<<<< HEAD
					<form action="" method="post" enctype="multipart/form-data">
=======
					<form action="update_contact.php?id=<?php echo $row["id"]; ?>" method="post" enctype="multipart/form-data">
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
						<table style="float:left" width="50%">
							<input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="fname" value="<?php echo $row['contact_fname'] ?>"  size="40%"></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="lname" value="<?php echo $row['contact_lname'] ?>" size="40%"></td>
							</tr>
							<tr>
								<td>Nickname:</td>
								<td><input type="text" name="nickname" value="<?php echo $row['contact_nickname'] ?>" size="40%"></td>
							</tr>
							<tr>
								<td>Profile Image:</td>
								<td><input type="file" name="profile"></td>
							</tr>
							<tr>
								<td>Cell Phone:</td>
								<td><input type="text" name="cphone" value="<?php echo $row['contact_cphone'] ?>" size="40%"></td>
							</tr>
							
						</table>
						<div class="clear"></div>
						<input class="insert_contact_button" type="submit" name="submit" value="Update Contact">
<<<<<<< HEAD
						<a href="index.php?username=<?php echo $row['username'];?>"><input class="cancel_contact_button" type="button" value="Cancel"></a>
=======
						<a href="index.php"><input class="cancel_contact_button" type="button" value="Cancel"></a>
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>	
</body>
</html>		
