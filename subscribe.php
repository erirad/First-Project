<?php
$db = mysqli_connect("localhost", "root", "root", "sekejai1");

if (isset($_POST['upload'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);


		$sql = "INSERT INTO pasekejai (elPastas) VALUES ('$email')";
		mysqli_query($db, $sql);
		header("Location: index.php");
}
?>
