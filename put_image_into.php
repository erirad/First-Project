<?php
$db = mysqli_connect("localhost", "root", "root", "insert_image");

function getConnection() {
  global $db;
  if($db) {
  }  else {
      die ( "error: " . mysqli_connect_error());
    }
  return $db;
}

function getImage ($nr) {
  $sql = "SELECT * FROM images WHERE id=$nr;";
  $results = mysqli_query(getConnection(), $sql);
  if($results) {
    $results = mysqli_fetch_assoc($results);
    return $results;
  } else {
    echo "Klaida" . mysqli_error(getConnection());
    return NULL;
  }
}
