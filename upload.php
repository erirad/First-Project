<?php
$db = mysqli_connect("localhost", "root", "root", "photos");
	$msg = "";


	if (isset($_POST['upload'])) {
		$target = "clients_images/".basename($_FILES['image']['name']);


		$image = $_FILES['image']['name'];
		$text = mysqli_real_escape_string($db, $_POST['text']);
		$email = mysqli_real_escape_string($db, $_POST['email']);


		$sql = "INSERT INTO images (image, text, email) VALUES ('$image', '$text', '$email')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		header("Location: index.php");
		}else{
			$msg = "Failed to upload image";
		}
	}

	$result = mysqli_query($db, "SELECT * FROM images");

?>
