<?php
session_start();

$db = mysqli_connect("localhost", "root", "root", "prisiloginimas");
if(!$db) {
  die("Connection failed!" .mysqli_connect_error());
}

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' && pwd='$pwd'";
$results = $db->query($sql);

if (!$row = $results->fetch_assoc()){
echo "Your username or password is incorrect!";
} else {
header("Location: index.php");
}


?>
