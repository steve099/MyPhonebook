<?php 

	if (isset($_GET['id'])) {

		$id = $_GET['id'];

<<<<<<< HEAD
		include_once"connection.php";
=======
		require_once"connection.php";
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d

		$contacts = array();

		$all_contacts = "SELECT * from contacts where id = '$id'";

		$sql_all_contacts = $conn->query($all_contacts);

		$total_contacts = $sql_all_contacts->num_rows;

		while ($row = mysqli_fetch_assoc($sql_all_contacts)) {
			$contacts[] = $row;
		}

		foreach ($contacts as $contact);
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
				<div class="floatl"><h1><?php echo $contact["contact_fname"] . " " . $contact["contact_lname"]; ?></h1></div>
<<<<<<< HEAD
				<a class="floatr" href="index.php?username=<?php isset($_SESSION['username']); echo $_SESSION['username'];?>"><input class="cancel_contact_button" type="button" value="Home"></a>
				
=======
				<a class="floatr" href="index.php"><input class="cancel_contact_button" type="button" value="Home"></a>
>>>>>>> 3d2dd9b36205d55167b0d052f8abf2eaca0d0b3d
				<div class="clear"></div>
				<hr>
				<div class="contact">
					<?php 
						if ($contact["contact_profile"] == "") {?>
							<img src="img/default_profile_pic.jpg" alt="default image"  width="40%" style="float:left;">
						<?php } else{?>
						<img src="profile_images/<?php echo $contact["contact_profile"]?>" alt="" width="40%" style="float:left;">
						<?php } ?>
					<div class="contact_info">
						<p><b>Nickname</b>: <?php echo $contact["contact_nickname"] ?></p>
						<p><b>Cell Phone #:</b> <?php echo $contact["contact_cphone"] ?></p>
					
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>		