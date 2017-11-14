<?php

session_start();


$db = mysqli_connect("localhost", "root", "root", "prisiloginimas");
if(!$db) {
  die("Connection failed!" .mysqli_connect_error());
}

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO users (first, last, uid, pwd) VALUES ('$first', '$last', '$uid', '$pwd')";
$results = $db->query($sql);

header("Location: index.php");


?>
